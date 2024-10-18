<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['content', 'author_id', 'team_id', 'image'];

    // Relation avec le modèle User (auteur du post)
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // Relation avec le modèle Team (équipe associée au post)
    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    // public function group()
    // {
    //     return $this->belongsTo(Group::class, 'team_id');
    // }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes')->withTimestamps();
    }

    public function isLikedByUser($userId)
    {
        return $this->likes()->where('user_id', $userId)->exists();
    }


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


}