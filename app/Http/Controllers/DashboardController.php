<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $projects = Project::orderBy('created_at', 'desc')->get();
        $projecttasks = $user->projectTasks;
        $userId = $user->id;
        $groupMessages = Group::whereHas('members', function ($query) use ($userId) {
            // Vérifier si l'utilisateur est membre du groupe
            $query->where('user_id', $userId);
        })
        ->with(['messages.files']) // Charger les messages et les fichiers associés aux messages
        ->get();
        $posts = Post::with('likes')->orderBy('created_at', 'desc')->get();
        return view('Front_include.dashboard', compact('user', 'projects','projecttasks','groupMessages','posts'));
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
