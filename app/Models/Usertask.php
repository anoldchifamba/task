<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{
    public $table = 'usertask';

    public $fillable = [
        'user_id',
        'task_id'
    ];

    protected $casts = [
        
    ];

    public static array $rules = [
        'user_id' => 'required',
        'task_id' => 'required',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
