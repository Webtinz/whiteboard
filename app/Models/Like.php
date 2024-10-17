<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // Assuming a user likes a post
        'post_id', // Assuming the like is linked to a post
    ];

    // A like belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // A like belongs to a post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
