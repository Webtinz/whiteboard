<?php

namespace App\Http\Controllers;

use App\Models\Etat;
use App\Models\Project;
use App\Models\ProjectTask;
use App\Models\User;
use Illuminate\Http\Request;

class EtatController extends Controller
{
    // Afficher tous les états
    public function index(String $id)
    {
        $projectChoose = Project::where('id', $id)->first();
        // dd($projectChoose->name);
        $etats = Etat::all();
        $projecttasks = ProjectTask::where('project_id', $id)->with('etat')->get();
        $users = User::all();
        return view('Front_include.kanbanboard', compact('etats','users','projectChoose', 'projecttasks'));
    }

    // Afficher le formulaire pour créer un nouvel état
    public function create()
    {
        return view('etats.create');
    }

    // Enregistrer un nouvel état
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'project_id' => 'required|string'
        ]);

        Etat::create([
            'name'=> $validated['name']
        ]);

        return redirect()->route('kanbanboard', $validated['project_id'])->with('success', 'État créé avec succès');
    }

    // Afficher un état spécifique
    public function show(Etat $etat)
    {
        return view('etats.show', compact('etat'));
    }

    // Afficher le formulaire pour modifier un état
    public function edit(Etat $etat)
    {
        return view('etats.edit', compact('etat'));
    }

    // Mettre à jour un état existant
    public function update(Request $request, Etat $etat)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $etat->update($validated);

        return redirect()->route('etats.index')->with('success', 'État mis à jour avec succès');
    }

    // Supprimer un état
    public function destroy(Etat $etat)
    {
        $etat->delete();
        return redirect()->route('etats.index')->with('success', 'État supprimé avec succès');
    }
}
