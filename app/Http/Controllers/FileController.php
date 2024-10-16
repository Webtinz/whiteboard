<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\File;
use App\Models\FileClick;
use Illuminate\Support\Facades\Storage;


class FileController extends Controller
{
    public function store(Request $request, $projectId)
    {
        $request->validate([
            'file' => 'required|file|max:10240',
            'type' => 'required|string'
        ]);

        $project = Project::findOrFail($projectId);
        $file = $request->file('file');
        $path = $file->store('public/project_files');

        File::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
            'project_id' => $project->id,
            'type' => $request->type,
            'uploaded_by' => auth()->user()->id,
        ]);

        return redirect()->route('projects.show', $project->id);
    }

    public function view($id)
    {
        $file = File::findOrFail($id);
        $unicity = FileClick::where('file_id', $id)
                              ->where('user_id',auth()->id())->get();

        // Enregistre l'ID de l'utilisateur s'il est authentifié
        if (auth()->check()) {
            if(!$unicity){
                FileClick::create([
                    'file_id' => $file->id,
                    'user_id' => auth()->id(),
                ]);
            }
        }

        // Renvoie le fichier à afficher dans le navigateur
        return response()->file(storage_path('app/' . $file->path));
    }

    public function download($fileId)
    {
        $file = File::findOrFail($fileId);
        return Storage::download($file->path, $file->name);
    }

    public function delete($fileId)
    {
        // Trouver le fichier par ID
        $file = File::findOrFail($fileId);

        // Supprimer le fichier du système de fichiers
        if (Storage::exists($file->path)) {
            Storage::delete($file->path);
        }

        // Supprimer l'enregistrement de la base de données
        $file->delete();

        return redirect()->back();
    }
}
//Pour afficher les users ayant ouvert le fichier
// $file = File::find($id);
// $users = $file->clicks->pluck('user_id');

