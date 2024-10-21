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
    protected $fillable = ['title', 'description', 'color', 'start_date', 'start_time', 'end_date', 'end_time', 'status', 'priority', 'created_at', 'updated_at'];
}
