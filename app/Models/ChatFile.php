<?php

namespace App\Models;

use App\Models\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChatFile extends Model
{
    use HasFactory;
    protected $fillable = ['message_id', 'file_path', 'type','size'];

    public function message()
    {
        return $this->belongsTo(Message::class);
    }
}
