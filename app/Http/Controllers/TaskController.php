<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

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
        $tasks = Task::all()->map(function ($task) {
            return [
                'id' => $task->id,
                'backgroundColor' => $task->color,
                'borderColor' => $task->color,
                'title' => $task->title,
                'start' => $task->start_date . 'T' . $task->start_time, 
                'end' => $task->end_date . 'T' . $task->end_time, 
            ];
        });

        return response()->json($tasks);
    }

    public function storeTask(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'start_date' => 'required|date',
            'start_time' => 'nullable',
            'end_date' => 'nullable|date',
            'end_time' => 'nullable',
            'description' => 'nullable|string',
            'color' => 'nullable|string',
            'priority' => 'nullable|string',
        ]);

        // Save the Task
        $task = Task::create($validated);

        return response()->json($task, 201);
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
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
