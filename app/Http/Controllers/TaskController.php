<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Project;
use App\Models\ProjectTask;
use App\Models\Etat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\MeetingScheduled;
use App\Notifications\ReunionReminder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Notification;
use App\Mail\ReunionNotification;
use Illuminate\Support\Facades\Mail;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function taskslist(){
        $projects = Project::all();
        $etats = Etat::all();
        $user = Auth::user(); // Obtenir l'utilisateur connecté
        $projecttasks = $user->projectTasks;
        return view('Front_include.task', compact('projects', 'etats','user', 'projecttasks'));
    }
    public function calendar(){
        $userId = Auth::id();
        // Récupérer les tâches
        $tasks = Task::where(function ($query) use ($userId) {
            $query->where('public_or_private', 'public') // Tâches publiques
                  ->orWhere(function ($q) use ($userId) {
                      $q->where('public_or_private', 'private') // Tâches privées
                        ->whereJsonContains('specific_users', $userId); // Vérifier si l'utilisateur est dans specific_users (JSON)
                  });
        })
        ->orderByDesc('created_at')
        ->get(); 
        $users = User::all();
        return view('admin.calendar', compact('tasks','users'));
    }
    public function tasks()
    {
        $userId = Auth::id();
        // user_id-specific_users-public_or_private
        $tasks = Task::where(function ($query) use ($userId) {
            $query->where('public_or_private', 'public') // Tâches publiques
                  ->orWhere(function ($q) use ($userId) {
                      $q->where('public_or_private', 'private') // Tâches privées
                        ->whereJsonContains('specific_users', $userId); // Vérifier si l'utilisateur est dans specific_users (JSON)
                  });
        })
        ->orderByDesc('created_at')->get()->map(function ($task) {
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

    // Fonction qui planifie la notification email
    public function planifierNotification($reunion)
    {
        if($reunion->public_or_private == "private"){
            $participants = json_decode($reunion->specific_users); // Utilisateurs impliqués dans la réunion
            $participants[] = $reunion->user_id;
            $participants = array_unique($participants);
            $tempsAvantReunion = Carbon::parse($reunion->start_time)->subHour()->subMinutes(20);

            foreach ($participants as $participant) {
                $user_to_send = User::findOrFail($participant);
                Mail::to($user_to_send->email)
                    ->later($tempsAvantReunion, new ReunionNotification($reunion));
                    \Log::info("Planification de l'email pour {$user_to_send->email} à {$tempsAvantReunion}");
            }
        }else{
            $participants = User::all();
            $tempsAvantReunion = Carbon::parse($reunion->start_time)->subHour()->subMinutes(20);

            foreach ($participants as $participant) {
                Mail::to($participant->email)
                    ->later($tempsAvantReunion, new ReunionNotification($reunion));
                    \Log::info("Planification de l'email pour {$participant->email} à {$tempsAvantReunion}");
            }
        }
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
            if($validated['public_or_private'] == 'private'){
                $validated['specific_users'] = array_map('intval', $validated['specific_users']);
                $validated['specific_users'] = json_encode($validated['specific_users']);
            }
        
            // Sauvegarde de la tâche
            $task = Task::create($validated);
            $this->planifierNotification($task);
        
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
