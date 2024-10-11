<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function store(Request $request, $projectId)
    {
        $request->validate([
            'file' => 'required|file|max:10240',
        ]);

        $project = Project::findOrFail($projectId);
        $file = $request->file('file');
        $path = $file->store('project_files');

        File::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
            'project_id' => $project->id,
            'uploaded_by' => auth()->user()->id,
        ]);

        return redirect()->route('projects.show', $project->id);
    }

    public function download($fileId)
    {
        $file = File::findOrFail($fileId);
        return Storage::download($file->path, $file->name);
    }
}
