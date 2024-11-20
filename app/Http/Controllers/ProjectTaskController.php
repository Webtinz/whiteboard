<?php

namespace App\Http\Controllers;

use App\Models\Etat;
use App\Models\Project;
use App\Models\ProjectTask;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;

class ProjectTaskController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'progress' => 'required|integer|min:0|max:100',
            'assigned_members' => 'nullable|array',
            'etat_id' => 'required|integer',
            'project_id'=> 'required|integer',
            'estimate_time' => 'nullable|string',
            'real_time' => 'nullable|string',
            'type' => 'required|string',
            'parent_id' => 'nullable|string',
        ]);
        $etat_actuel = Etat::findOrFail($validated['etat_id']);
        if ($etat_actuel->name == "Active") {
            $startTask = date('Y-m-d H:i:s');
            $date = new DateTime($startTask);
            if(empty($validated['real_time'])){
                $estimateTime = $validated['estimate_time'];
            }else{
                $estimateTime = $validated['real_time'];
            }
        
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

        // Assigner les membres à la tâche si des membres sont sélectionnés
        if (!empty($validated['assigned_members'])) {
            $task->users()->attach($validated['assigned_members']);
        }
        $count = 0;
        $count2 = 0;
        $allProjectTasks = ProjectTask::where('project_id',$task->project_id)
                                    ->where('type', 'simple_task')->get();
        $project = Project::findOrFail($task->project_id);
        foreach ($allProjectTasks as $all) {
            if($all->end_date){
                if($all->end_date < date('Y-m-d H:i:s', strtotime('+1 hour'))){
                    $count++;
                }if($all->progress == 100){
                    $count2++;
                }
            }
        }
        if($count > ($allProjectTasks->count() / 2)){
            $project->status = 'Late';
            $project->save();
        }else if($count2 == $allProjectTasks->count()){
            $project->status = 'Completed';
            $project->save();
        }
        else{
            $project->status = 'Up-to-date';
            $project->save();
        }

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $count = 0;
        $count2 = 0;
        $task = ProjectTask::findOrFail($id);
        $allProjectTasks = ProjectTask::where('project_id',$task->project_id)
                                    ->where('type', 'simple_task')->get();
        $project = Project::findOrFail($task->project_id);
        foreach ($allProjectTasks as $all) {
            if($all->end_date){
                if($all->end_date < date('Y-m-d H:i:s', strtotime('+1 hour'))){
                    $count++;
                }
                if($all->progress == 100){
                    $count2++;
                }
            }
        }
        if($count > ($allProjectTasks->count() / 2)){
            $project->status = 'Late';
            $project->save();
        }else if($count2 == $allProjectTasks->count()){
            $project->status = 'Completed';
            $project->save();
        }
        else{
            $project->status = 'Up-to-date';
            $project->save();
        }
        
        $etat_actuel = Etat::findOrFail($task->etat_id);
        if ($etat_actuel->name == "Active") {
            $startTask = $task->start_date;
            $date = new DateTime($startTask);
            if(empty($request->real_time)){
                $estimateTime = $request->estimate_time;
            }else{
                $estimateTime = $request->real_time;
            }
        
            $hours = floor($estimateTime);
            $minutes = ($estimateTime - $hours) * 60;
        
            $endTask = $date->modify("+{$hours} hours +{$minutes} minutes");
        } else {
            $startTask = null;
            $endTask = null;
        }

        $task->update([
            'name' => $request->name,
            'description' => $request->description,
            'progress' => $request->progress,
            'start_date' => $startTask,
            'end_date' => $endTask,
            'estimate_time' => $request->estimate_time,
            'real_time' => $request->real_time,
            'type' => $request->type,
            'parent_id' => $request->parent_id
        ]);
        if (!empty($request->assigned_members)) {
            $task->users()->detach();
            $task->users()->syncWithoutDetaching($request->assigned_members);
        }

        return redirect()->back()->with('success', 'Task updated successfully');
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
        $task = ProjectTask::with(['users', 'etat'])->findOrFail($id);
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