<?php

namespace App\Http\Controllers\Whiteboard;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    //
    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required|string',
            'receiver_id' => 'nullable|exists:users,id',
            'group_id' => 'nullable|exists:groups,id',
        ]);
        
        // dd($validated);

        if (!auth()->id()) {
            return redirect()->route('login')->with('error', 'You need to be connected');
        }

        $message = Message::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $validated['receiver_id'],
            'group_id' => $validated['group_id'],
            'content' => $validated['content'],
        ]);

        // return response()->json($message);
        return response()->json([
            'content' => $request->input('content'),
            'receiver_id' => $request->input('receiver_id'),
            'group_id' => $request->input('group_id')
        ]);
    }

    // public function getConversationWithUser($receiverId)
    // {
    //     $messages = Message::where(function ($query) use ($receiverId) {
    //         $query->where('sender_id', auth()->id())
    //               ->where('receiver_id', $receiverId);
    //     })->orWhere(function ($query) use ($receiverId) {
    //         $query->where('sender_id', $receiverId)
    //               ->where('receiver_id', auth()->id());
    //     })->get();

    //     return response()->json($messages);
    // }

    public function getConversationWithUser($receiverId){
        $authUserId = auth()->id(); // Récupérer l'utilisateur authentifié

        // Récupérer les messages échangés entre l'utilisateur authentifié et l'utilisateur ciblé
        $messages = Message::where(function ($query) use ($authUserId, $receiverId) {
                $query->where('sender_id', $authUserId)
                    ->where('receiver_id', $receiverId);
            })
            ->orWhere(function ($query) use ($authUserId, $receiverId) {
                $query->where('sender_id', $receiverId)
                    ->where('receiver_id', $authUserId);
            })
            ->orderBy('created_at', 'asc') // Ordonner par date d'envoi des messages
            ->get();

            foreach ($messages as $message) {
                $message['sender'] = $message->sender->name;
                $message['sender_profile'] = asset('assets/images/users/avatar-'. $message->sender_id .'.jpg');

                $message['receiver'] = $message->receiver->name;
                $message['receiver_profile'] = asset('assets/images/users/avatar-'. $message->sender_id+1 .'.jpg');
                // Supposons que $conversation est l'objet que vous envoyez au front
                // $message->created_at = Carbon::parse($message->created_at)->format('H:i:s');

                // dd($message);
            }
        return response()->json($messages);
    }

    public function getGroupConversation($groupId){

        $authUserId = auth()->id(); // Récupérer l'utilisateur authentifié

        $groupMessages = Message::where('group_id', $groupId)
            ->orderBy('created_at', 'asc') // Ordonner par date d'envoi des messages
            ->get();

            foreach ($groupMessages as $groupMessage) {
                $groupMessage['sender'] = $groupMessage->sender->name;
                $groupMessage['sender_profile'] = asset('assets/images/users/avatar-'. $groupMessage->sender_id .'.jpg');
                // dd($message);
        }

        return response()->json($groupMessages);
    }

    public function getAllConversations(){
        $authUserId = auth()->id(); // Utilisateur actuellement authentifié
        $allUsers = User::all();
        // Récupérer les conversations directes (messages privés)
        $directConversations = Message::where(function ($query) use ($authUserId) {
            $query->where('sender_id', $authUserId)
                ->orWhere('receiver_id', $authUserId);
        })
        ->whereNull('group_id') // S'assurer que ce sont des messages directs, pas des messages de groupe
        ->with(['sender', 'receiver']) // Charger les informations sur l'expéditeur et le destinataire
        ->get()
        ->groupBy(function ($message) use ($authUserId) {
            // Grouper les messages directs par utilisateur
            return $message->sender_id === $authUserId ? $message->receiver_id : $message->sender_id;
        });

        // Récupérer les conversations de groupe
        $groupMessages = Message::whereHas('group', function ($query) use ($authUserId) {
            // Vérifier si l'utilisateur est membre du groupe
            $query->whereHas('members', function ($q) use ($authUserId) {
                $q->where('user_id', $authUserId);
            });
        })
        ->with('group') // Charger les informations du groupe
        ->get()
        ->groupBy('group_id'); // Grouper les messages par groupe
        // Pour formater le résultat comme désiré

        $groupConversations = [];
        foreach ($groupMessages as $groupId => $messages) {
            $groupInfo = $messages->first()->group; // Prendre les infos du groupe

            // Compter les membres du groupe
            $numberOfMembers = $groupInfo->members->count();

            $groupConversations[$groupId] = [
                'group' => $groupInfo,
                'messages' => $messages,
                'number_of_members' => $numberOfMembers // Ajouter le nombre de membres
            ];
        }
        // dd($groupConversations);
        
        // return response()->json([
        //     'direct_conversations' => $directConversations,
        //     'group_conversations' => $groupConversations,
        // ]);
        return view('ak_dir.chat.chat', compact('directConversations','groupConversations','allUsers'));
    }

    // public function getUserConversations(){
    //     $authUserId = auth()->id(); // L'utilisateur actuellement authentifié
    
    //     // Récupérer les conversations directes (messages privés où l'utilisateur est expéditeur ou destinataire)
    //     $directConversations = Message::where(function ($query) use ($authUserId) {
    //             $query->where('sender_id', $authUserId)
    //                   ->orWhere('receiver_id', $authUserId);
    //         })
    //         ->whereNull('group_id') // S'assurer que ce sont des conversations directes
    //         ->with(['sender', 'receiver']) // Charger les informations sur les utilisateurs concernés
    //         ->orderBy('created_at', 'desc')
    //         ->get();
    
    //     // Récupérer les conversations de groupe (groupes auxquels l'utilisateur appartient)
    //     $groupConversations = Message::whereHas('group', function ($query) use ($authUserId) {
    //             // Vérifier si l'utilisateur fait partie des membres du groupe
    //             $query->whereHas('members', function ($q) use ($authUserId) {
    //                 $q->where('user_id', $authUserId);
    //             });
    //         })
    //         ->with('group') // Charger les informations sur le groupe
    //         ->orderBy('created_at', 'desc')
    //         ->get();
    
    //     return response()->json([
    //         'direct_conversations' => $directConversations,
    //         'group_conversations' => $groupConversations,
    //     ]);
    // }
    
}
