<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $table = 'tasks';

    public $fillable = [
        'user_id',
        'title',
        'description',
        'duedate',
        'priority',
        'status'
    ];

    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'duedate' => 'date'
    ];

    public static array $rules = [
        'user_id' => 'nullable',
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'duedate' => 'required',
        'priority' => 'required',
        'status' => 'required',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
