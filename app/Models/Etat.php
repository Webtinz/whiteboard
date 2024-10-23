<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etat extends Model
{
    protected $fillable = ['name'];

    public function tasks()
    {
        return $this->hasMany(ProjectTask::class);
    }
}