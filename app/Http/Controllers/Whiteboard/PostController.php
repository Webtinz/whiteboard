<?php

namespace App\Http\Controllers\Whiteboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function createPost(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required|string',
            'visibility' => 'required|in:public,private,friends_only',
        ]);

        $post = Post::create([
            'content' => $validated['content'],
            'user_id' => auth()->id(),
            'visibility' => $validated['visibility'],
        ]);

        return response()->json($post);
    }
}
