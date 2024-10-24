<?php

namespace App\Http\Controllers;

use App\Models\ProjectTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;

class ProjectTaskController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'progress' => 'required|integer|min:0|max:100',
            'assigned_members' => 'nullable|array',
            'etat_id' => 'required|integer',
            'project_id'=> 'required|integer',
            'end_date' => 'nullable|string'
        ]);

        $task = ProjectTask::create([
            'name' => $validated['title'],
            'description' => $validated['description'],
            'progress' => $validated['progress'],
            'project_id' => $validated['project_id'],
            'etat_id' => $validated['etat_id'],
            'end_date' => $validated['end_date']
        ]);

        // Assigner les membres à la tâche si des membres sont sélectionnés
        if (!empty($validated['assigned_members'])) {
            $task->users()->attach($validated['assigned_members']);
        }

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $task = ProjectTask::findOrFail($id);

        $task->update([
            'name' => $request->name,
            'description' => $request->description,
            'progress' => $request->progress,
            'end_date' => $request->end_date,
        ]);
        if (!empty($request->assigned_members)) {
            $task->users()->attach($request->assigned_members);
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

    public function move(Request $request, $id)
    {
        try {
            $task = ProjectTask::findOrFail($id);
            $task->etat_id = $request->etat_id;
            $task->save();
            
            return response()->json([
                'success' => true,
                'message' => 'Tâche déplacée avec succès'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erreur lors du déplacement de la tâche'
            ], 500);
        }
    }

}