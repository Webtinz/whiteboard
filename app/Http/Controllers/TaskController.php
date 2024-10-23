<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function taskslist(){
        $tasks = Task::orderByDesc('created_at')->get();
        return view('Front_include.task', compact('tasks'));
    }
    public function calendar(){
        $tasks = Task::orderByDesc('created_at')->get();
        return view('admin.calendar', compact('tasks'));
    }
    public function tasks()
    {
        // user_id-specific_users-public_or_private
        $tasks = Task::all()->map(function ($task) {
            return [
                'id' => $task->id,
                'backgroundColor' => $task->color,
                'borderColor' => $task->color,
                'title' => $task->title,
                'start' => $task->start_date . 'T' . $task->start_time, 
                'end' => $task->end_date . 'T' . $task->end_time
            ];
        });

        return response()->json($tasks);
    }

    public function storeTask(Request $request)
    {
        try {
            // Validation des données
            // user_id-specific_users-public_or_private

            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'start_date' => 'required|date',
                'start_time' => 'nullable|date_format:H:i:s',
                'end_date' => 'nullable|date|after_or_equal:start_date',
                'end_time' => 'nullable|date_format:H:i:s',
                'description' => 'nullable|string',
                'color' => 'nullable|string',
                'priority' => 'nullable|string|in:urgent,high,medium,low', // Assurez-vous que les valeurs correspondent
                // 'specific_users' => 'nullable|array', // Changez cela pour vérifier que c'est un tableau
                'specific_users.*' => 'nullable|integer', // Assurez-vous que ce sont des entiers
                'public_or_private' => 'required|string', // Changez cela pour un booléen
            ]);
            // dd($validated);
            
        
            // Ajoutez l'ID de l'utilisateur authentifié
            $validated['user_id'] = Auth::user()->id;
            $validated['specific_users'] = json_encode($validated['specific_users']);
        
            // Sauvegarde de la tâche
            $task = Task::create($validated);
        
            // Retourne la tâche nouvellement créée en JSON
            return response()->json([
                'message' => 'Task created successfully',
                'task' => $task,
            ], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    

    public function updateTask(Request $request)
    {
        $taskId = $request->input('taskId');  // Get the task ID from the request

        // Find the task by task ID, lead ID, and sales rep ID
        $task = Task::where('id', $taskId)->first();

        if ($task) {
            $task->title = $request->input('title');
            $task->description = $request->input('description');
            $task->start_date = $request->input('start_date');
            $task->start_time = $request->input('start_time');
            $task->end_date = $request->input('end_date');
            $task->end_time = $request->input('end_time');
            $task->color = $request->input('color');
            $task->user_id = Auth::user()->id;
            $task->specific_users = json_encode($request->input('specific_users')) ?? null;
            $task->public_or_private = $request->input('public_or_private');
            $task->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 404);
    }

    public function deleteTask(Request $request, Task $task)
    {
        // return response()->json($request->taskId, 200);
        $task = Task::findOrFail($request->taskId);
        $task->delete();
        return response()->json(null, 204);
    }

    public function getTask(Request $request, Task $task)
    {
        // return response()->json($task, 200);
        $task = Task::findOrFail($request->taskId);
        
        return response()->json($task, 200);
    }
}
