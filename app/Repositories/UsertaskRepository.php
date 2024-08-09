<?php

namespace App\Repositories;

use App\Models\UserTask;
use App\Repositories\BaseRepository;

class UserTaskRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'task_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return UserTask::class;
    }
}
