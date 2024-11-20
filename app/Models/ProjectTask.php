<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'estimate_time','real_time','start_date', 'end_date', 'progress', 
        'project_id', 'etat_id', 'parent_id', 'type'
    ];

    // Relation vers la tâche parente
    public function parent()
    {
        return $this->belongsTo(ProjectTask::class, 'parent_id');
    }

    // Relation vers les sous-tâches
    public function children()
    {
        return $this->hasMany(ProjectTask::class, 'parent_id');
    }

    /**
     * Relation avec le modèle Etat.
     * Une tâche appartient à un seul état.
     */
    public function etat()
    {
        return $this->belongsTo(Etat::class);
    }

    public function files()
    {
        return $this->hasMany(TaskFile::class);
    }

    

    /**
     * Relation avec le modèle User.
     * Une tâche peut être assignée à plusieurs utilisateurs.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'project_task_user');
    }

}
