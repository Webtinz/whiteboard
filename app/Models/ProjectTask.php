<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'progress',
        'project_id',
        'etat_id',
        'end_date'
    ];

    /**
     * Relation avec le modèle Etat.
     * Une tâche appartient à un seul état.
     */
    public function etat()
    {
        return $this->belongsTo(Etat::class);
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
