<?php

namespace App\Http\Controllers\Whiteboard;

use App\Models\Group;
use App\Models\Message;
use App\Models\GroupMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    //
    public function createGroup(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        if (!Auth::user()) {
            return back()->with('error','You need to be connected');
        }
        $group = Group::create([
            'name' => $validated['name'],
            'created_by' => auth()->id(),
        ]);

        $firstGroupMember = GroupMember::create([
            'group_id' => $group->id,
            'user_id' => auth()->id(),
        ]);

        $authUserId = Auth::user()->id;

        // Récupérer les conversations de groupe
        $groupMessages = Group::whereHas('members', function ($query) use ($authUserId) {
            // Vérifier si l'utilisateur est membre du groupe
            $query->where('user_id', $authUserId);
        })
        ->with(['messages.files']) // Charger les messages et les fichiers associés aux messages
        ->get();

        // Formater le résultat comme désiré
        $groupConversations = [];
        foreach ($groupMessages as $group) {
            // Prendre les infos du groupe
            $groupInfo = $group; // $group est déjà un objet Group

            // Compter les membres du groupe
            $numberOfMembers = $groupInfo->members->count();

            // Récupérer les messages du groupe
            $messages = $groupInfo->messages;

            $groupConversations[$groupInfo->id] = [ // Utiliser l'ID du groupe comme clé
                'group' => $groupInfo,
                'messages' => $messages,
                'number_of_members' => $numberOfMembers // Ajouter le nombre de membres
            ];
        }
        // Retourner la vue partielle contenant la liste des groupes
        return view('ak_dir.chat.partials.group-list', compact('groupConversations'))->render();
    }

    public function membersGroup($groupId){
        $group = Group::find($groupId);
        $members = $group->members;

        // Filtrer les doublons basés sur l'email
        $uniqueUsers = $members->unique('id');
        
        // Convertir à nouveau en tableau si nécessaire
        $uniqueUsersArray = $uniqueUsers->values()->all(); // Cela réindexe les clés
        // dd($uniqueUsersArray);
        return response()->json($members);
    }

    public function addMember(Request $request, $groupId)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        GroupMember::create([
            'group_id' => $groupId,
            'user_id' => $validated['user_id'],
        ]);

        return response()->json(['message' => 'Member added successfully']);
    }

    public function removeMember(Request $request, $groupId)
    {
        $users = GroupMember::where('group_id', $groupId)->where('user_id', $request->user_id)->get();

        if ($users) {
            foreach ($users as $user) {
                $user->delete();
            }
            return response()->json(['message' => 'Member removed successfully']);
        }else {
            return response()->json(['message' => 'Member not found']);
        }


    }

}
