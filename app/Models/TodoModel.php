<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'task_name',
        'task_description',
        'created_by',
        'created_date',
        'task_status',
        'task_source',
    ];
}
