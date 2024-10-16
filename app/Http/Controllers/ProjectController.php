<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\File;

class ProjectController extends Controller
{
    public function index()
    {
        // Affiche tous les projets
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function show($project_id)
    {
        $project = Project::findOrFail($project_id);
        $files = File::where('project_id', $project_id)->orderBy('id', 'desc')->get();
        return view('projects.show', compact('project', 'files'));
    }

    public function update(Request $request, $post_id)
    {
        $post = Project::findOrFail($post_id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'nullable|string',
            'deadline' => 'nullable|date',
        ]);

        // Met à jour le contenu du post
        $post->update([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            'deadline' => $request->deadline,
        ]);

        return redirect()->route('projects.index')->with('success', 'Post mis à jour avec succès !');
    }

    public function edit($project_id)
    {
        $project = Project::findOrFail($project_id);
        return view('projects.edit', compact('project'));
    }

    public function delete($projectId)
    {
        $project = Project::findOrFail($projectId);
        $project->delete();
        return back();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'nullable|string',
            'deadline' => 'nullable|date',
        ]);
        
        Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            'deadline' => $request->deadline,
            'created_by' => auth()->user()->id,
        ]);


        return redirect()->route('projects.index');
    }
}
