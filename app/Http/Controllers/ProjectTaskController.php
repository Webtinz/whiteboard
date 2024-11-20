<?php

namespace App\Http\Controllers;

use App\Models\Etat;
use App\Models\Project;
use App\Models\ProjectTask;
use App\Models\TaskFile;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectTaskController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'progress' => 'nullable|min:0|max:100',
        'assigned_members' => 'nullable|array',
        'etat_id' => 'required|integer',
        'project_id' => 'required|integer',
        'estimate_time' => 'nullable|string',
        'real_time' => 'nullable|string',
        'type' => 'required|string',
        'parent_id' => 'nullable|string',
        'files.*' => 'file|max:2048', // Validation des fichiers
    ]);

    $etat_actuel = Etat::findOrFail($validated['etat_id']);
    if ($etat_actuel->name == "Active") {
        $startTask = date('Y-m-d H:i:s');
        $date = new DateTime($startTask);
        $estimateTime = empty($validated['real_time']) ? $validated['estimate_time'] : $validated['real_time'];
        $hours = floor($estimateTime);
        $minutes = ($estimateTime - $hours) * 60;
        $endTask = $date->modify("+{$hours} hours +{$minutes} minutes");
    } else {
        $startTask = null;
        $endTask = null;
    }

    $task = ProjectTask::create([
        'name' => $validated['name'],
        'description' => $validated['description'],
        'progress' => $validated['progress'],
        'project_id' => $validated['project_id'],
        'etat_id' => $validated['etat_id'],
        'start_date' => $startTask,
        'end_date' => $endTask,
        'estimate_time' => $validated['estimate_time'],
        'real_time' => $validated['real_time'],
        'type' => $validated['type'],
        'parent_id' => $validated['parent_id']
    ]);

    if (!empty($validated['assigned_members'])) {
        $task->users()->attach($validated['assigned_members']);
    }

    // Gestion des fichiers
    if ($request->hasFile('files')) {
        foreach ($request->file('files') as $file) {
            $path = $file->store('task_files', 'public');
            $task->files()->create([
                'file_name' => $file->getClientOriginalName(),
                'file_path' => $path,
            ]);
        }
    }

    return redirect()->back()->with('success', 'Task and files created successfully!');
}


    public function uploadFiles(Request $request, ProjectTask $task)
    {
        $request->validate([
            'files.*' => 'file|max:2048', // Limite la taille de chaque fichier à 2MB
        ]);
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $path = $file->store('task_files', 'public'); // Stocke dans le disque `public`

                $task->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file_path' => $path,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Files uploaded successfully!');
    }

    public function deleteFile(TaskFile $file)
    {
        Storage::disk('public')->delete($file->file_path); // Supprime le fichier
        $file->delete(); // Supprime l'enregistrement dans la base
        return redirect()->back()->with('success', 'File deleted successfully!');
    }



    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'progress' => 'integer|min:0|max:100',
        'assigned_members' => 'nullable|array',
        'estimate_time' => 'nullable|string',
        'real_time' => 'nullable|string',
        'type' => 'required|string',
        'parent_id' => 'nullable|string',
        'files.*' => 'file|max:2048', // Validation des fichiers
    ]);

    $task = ProjectTask::findOrFail($id);

    $etat_actuel = Etat::findOrFail($task->etat_id);
    if ($etat_actuel->name == "Active") {
        $startTask = $task->start_date;
        $date = new DateTime($startTask);
        $estimateTime = empty($validated['real_time']) ? $validated['estimate_time'] : $validated['real_time'];
        $hours = floor($estimateTime);
        $minutes = ($estimateTime - $hours) * 60;
        $endTask = $date->modify("+{$hours} hours +{$minutes} minutes");
    } else {
        $startTask = null;
        $endTask = null;
    }

    $task->update([
        'name' => $validated['name'],
        'description' => $validated['description'],
        'progress' => $validated['progress'],
        'start_date' => $startTask,
        'end_date' => $endTask,
        'estimate_time' => $validated['estimate_time'],
        'real_time' => $validated['real_time'],
        'type' => $validated['type'],
        'parent_id' => $validated['parent_id']
    ]);

    if (!empty($validated['assigned_members'])) {
        $task->users()->sync($validated['assigned_members']);
    }

    // Gestion des fichiers
    if ($request->hasFile('files')) {
        foreach ($request->file('files') as $file) {
            $path = $file->store('task_files', 'public');
            $task->files()->create([
                'file_name' => $file->getClientOriginalName(),
                'file_path' => $path,
            ]);
        }
    }

    return redirect()->back()->with('success', 'Task and files updated successfully!');
}


    public function destroy($id)
    {
        try {
            $task = ProjectTask::findOrFail($id);
            $task->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'Tâche supprimée avec succès'
            ]);
        } catch (\Exception $e) {
            \Log::error('Erreur de suppression de tâche: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Erreur lors de la suppression de la tâche'
            ], 500);
        }
    }

    public function show($id)
    {
        $task = ProjectTask::with('users')->find($id);
        return response()->json($task);
    }

    public function showDetails($id)
    {
        $task = ProjectTask::with(['users', 'etat', 'files'])->findOrFail($id);
        $tasks = ProjectTask::all();
        $users = User::all();
        return view('Front_include.show', compact('task','tasks', 'users'));
    }


    public function move(Request $request, $id)
    {
        try {
            $task = ProjectTask::findOrFail($id);
            $etat = Etat::findOrFail($request->etat_id);
            if ($etat->name == "Active") {
                $task->start_date = date('Y-m-d H:i:s');
                $date = new DateTime($task->start_date);
                if(empty($task->real_time)){
                    $estimateTime = $task->estimate_time;
                }else{
                    $estimateTime = $task->real_time;
                }
            
                $hours = floor($estimateTime);
                $minutes = ($estimateTime - $hours) * 60;
            
                $task->end_date = $date->modify("+{$hours} hours +{$minutes} minutes");
            }
            $task->etat_id = $request->etat_id;
            $task->save();
            
            return response()->json([
                'success' => true,
                'message' => 'Tâche déplacée avec succès',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $id
            ], 500);
        }
    }

    public function searchUsers(Request $request)
    {
        $search = $request->input('q');
        $users = User::where('name', 'LIKE', "%{$search}%")->get(['id', 'name']);
        return response()->json($users);
    }

    // TaskController.php
    public function searchTasks(Request $request)
    {
        $search = $request->input('q');
        $tasks = ProjectTask::where('name', 'LIKE', "%{$search}%")->get(['id', 'name', 'type']);
        return response()->json($tasks);
    }

}