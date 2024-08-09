<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserTaskRequest;
use App\Http\Requests\UpdateUserTaskRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\UserTaskRepository;
use Illuminate\Http\Request;
use Flash;

class UserTaskController extends AppBaseController
{
    /** @var UserTaskRepository $userTaskRepository*/
    private $userTaskRepository;

    public function __construct(UserTaskRepository $userTaskRepo)
    {
        $this->userTaskRepository = $userTaskRepo;
    }

    /**
     * Display a listing of the UserTask.
     */
    public function index(Request $request)
    {
        $userTasks = $this->userTaskRepository->paginate(10);

        return view('user_tasks.index')
            ->with('userTasks', $userTasks);
    }

    /**
     * Show the form for creating a new UserTask.
     */
    public function create()
    {
        return view('user_tasks.create');
    }

    /**
     * Store a newly created UserTask in storage.
     */
    public function store(CreateUserTaskRequest $request)
    {
        $input = $request->all();

        $userTask = $this->userTaskRepository->create($input);

        Flash::success('User Task saved successfully.');

        return redirect(route('userTasks.index'));
    }

    /**
     * Display the specified UserTask.
     */
    public function show($id)
    {
        $userTask = $this->userTaskRepository->find($id);

        if (empty($userTask)) {
            Flash::error('User Task not found');

            return redirect(route('userTasks.index'));
        }

        return view('user_tasks.show')->with('userTask', $userTask);
    }

    /**
     * Show the form for editing the specified UserTask.
     */
    public function edit($id)
    {
        $userTask = $this->userTaskRepository->find($id);

        if (empty($userTask)) {
            Flash::error('User Task not found');

            return redirect(route('userTasks.index'));
        }

        return view('user_tasks.edit')->with('userTask', $userTask);
    }

    /**
     * Update the specified UserTask in storage.
     */
    public function update($id, UpdateUserTaskRequest $request)
    {
        $userTask = $this->userTaskRepository->find($id);

        if (empty($userTask)) {
            Flash::error('User Task not found');

            return redirect(route('userTasks.index'));
        }

        $userTask = $this->userTaskRepository->update($request->all(), $id);

        Flash::success('User Task updated successfully.');

        return redirect(route('userTasks.index'));
    }

    /**
     * Remove the specified UserTask from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $userTask = $this->userTaskRepository->find($id);

        if (empty($userTask)) {
            Flash::error('User Task not found');

            return redirect(route('userTasks.index'));
        }

        $this->userTaskRepository->delete($id);

        Flash::success('User Task deleted successfully.');

        return redirect(route('userTasks.index'));
    }
}
