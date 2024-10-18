<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileClick extends Model
{
    use HasFactory;

    protected $fillable = ['file_id', 'user_id'];
    public function clicks()
    {
        return $this->hasMany(FileClick::class);
    }

}
