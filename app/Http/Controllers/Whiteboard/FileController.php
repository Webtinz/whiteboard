<?php

namespace App\Http\Controllers\Whiteboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    public function uploadFile(Request $request, $messageId)
    {
        $validated = $request->validate([
            'file' => 'required|file|mimes:jpeg,png,jpg,gif,mp3,mp4|max:20480',
        ]);

        $filePath = $request->file('file')->store('uploads', 'public');

        $file = File::create([
            'message_id' => $messageId,
            'file_path' => $filePath,
            'type' => $request->file('file')->getClientOriginalExtension(),
        ]);

        return response()->json($file);
    }
}
