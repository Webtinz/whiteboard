<?php

namespace App\Http\Controllers\Whiteboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    //
    public function createGroup(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $group = Group::create([
            'name' => $validated['name'],
            'created_by' => auth()->id(),
        ]);

        return response()->json($group);
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

    public function removeMember($groupId, $userId)
    {
        GroupMember::where('group_id', $groupId)->where('user_id', $userId)->delete();

        return response()->json(['message' => 'Member removed successfully']);
    }

}
