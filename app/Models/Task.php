<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $color
 * @property string $start_date
 * @property string $start_time
 * @property string $end_date
 * @property string $end_time
 * @property string $status
 * @property string $priority
 * @property string $created_at
 * @property string $updated_at
 */
class Task extends Model
{
    /**
     * @var array
     */
    // protected $fillable = ['title', 'description', 'color', 'start_date', 'start_time', 'end_date', 'end_time', 'status', 'priority', 'created_at', 'updated_at'];
    protected $guarded = [];
    // protected $casts = [
    //     'specific_users' => 'array', // Cast to array
    // ];
    
    // Relation pour récupérer l'utilisateur principal (user_id)
    public function mainUser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relation pour récupérer les utilisateurs spécifiques (par les IDs dans specific_users)
    public function specificUsers()
    {
        return User::whereIn('id', $this->specific_users)->get();
    }

}
