<?php

namespace App\Http\Controllers\Whiteboard;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Message;
use App\Events\SendMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ChatFileController;

class MessageController extends Controller
{
    //
    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'content' => 'nullable|string',
            'receiver_id' => 'nullable|exists:users,id',
            'group_id' => 'nullable|exists:groups,id',
            'file.*' => 'nullable|file|max:20480',
        ]);
    
        if (!auth()->id()) {
            return redirect()->route('login')->with('error', 'You need to be connected');
        }
    
        // Créer le message
        $message = Message::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $validated['receiver_id'] ?? null,
            'group_id' => $validated['group_id'] ?? null,
            'content' => $validated['content'] ?? "",
        ]);
    
        // Si un fichier est envoyé, le stocker et l'associer au message
        $filePaths = [];
        if ($request->hasFile('file')) {
            // Appeler la méthode uploadFile pour gérer les fichiers
            $filePaths = app(ChatFileController::class)->uploadFile($request, $message->id);
    
            // Ajouter uniquement les chemins des fichiers dans le tableau $filePaths
            $messageFiles = [];
            foreach ($filePaths as $filePath) {
                $messageFiles[] = $filePath;
            }
        }
    
        // Broadcast the message using the SendMessage event
        event(new SendMessage($message));
    
        // Retourner la réponse JSON avec uniquement les chemins des fichiers
        return response()->json([
            'content' => $message->content,
            'receiver_id' => $message->receiver_id,
            'group_id' => $message->group_id,
            'files' => $filePaths, // Chemins des fichiers
            'sender' => $message->sender->name,
        ]);
    }
    

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
            ->with(['sender', 'receiver', 'files']) 
            ->orderBy('created_at', 'asc') // Ordonner par date d'envoi des messages
            ->get();

            foreach ($messages as $message) {
                $message['sender'] = $message->sender->name;
                $message['sender_profile'] = asset('assets/images/users/avatar-'. $message->sender_id .'.jpg');

                $message['receiver'] = $message->receiver->name;
                $message['receiver_profile'] = asset('assets/images/users/avatar-'. $message->sender_id+1 .'.jpg');
                // dd($message);
                if ($message->files) {
                    $array = [];
                    foreach ($message->files as $file) {
                        $filePath = "storage/" . $file->file_path;
                        if (file_exists($filePath)) {
                            $fileSize = filesize($filePath); // Taille en octets

                            // Récupérer la taille formatée
                            $file->fileSize = $this->formatFileSize($fileSize);
                
                            // Récupérer le nom du fichier sans 'uploads/'
                            $file->fileName = str_replace('uploads/', '', $file->file_path);
                        }
                    }
                }
                
                // Supposons que $conversation est l'objet que vous envoyez au front
                // $message->created_at = Carbon::parse($message->created_at)->format('H:i:s');

                // dd($message);
            }
        return response()->json($messages);
    }



    // Fonction pour formater la taille
    function formatFileSize($size) {
        if ($size >= 1024 * 1024 * 1024) {
            // Taille en Go
            return number_format($size / (1024 * 1024 * 1024), 2) . ' GB';
        } elseif ($size >= 1024 * 1024) {
            // Taille en Mo
            return number_format($size / (1024 * 1024), 2) . ' MB';
        } elseif ($size >= 1024) {
            // Taille en Ko
            return number_format($size / 1024, 2) . ' KB';
        } else {
            // Taille en octets
            return $size . ' Octets';
        }
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
        ->with(['sender', 'receiver', 'files']) // Charger les informations sur l'expéditeur, le destinataire, et les fichiers
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
        ->with(['group', 'files']) // Charger les informations du groupe et les fichiers
        ->get()
        ->groupBy('group_id'); // Grouper les messages par groupe

        // Formater le résultat comme désiré
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
        // dd();
        
        // Retourner la vue avec les conversations et fichiers
        return view('ak_dir.chat.chat', compact('directConversations', 'groupConversations', 'allUsers'));
    }
    
}
