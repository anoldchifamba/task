<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\TaskRepository;
use Illuminate\Http\Request;
use Flash;
use App\Models\Task;
use App\Models\User;

class TaskController extends AppBaseController
{
    /** @var TaskRepository $taskRepository*/
    private $taskRepository;

    public function __construct(TaskRepository $taskRepo)
    {
        $this->taskRepository = $taskRepo;
    }

    /**
     * Display a listing of the Task.
     */
    public function index(Request $request)
    {
        $tasks = $this->taskRepository->paginate(10);
        $users=User::all();
        return view('tasks.index')
            ->with('tasks', $tasks)->with('users',$users);
    }

    /**
     * Show the form for creating a new Task.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created Task in storage.
     */
    public function store(CreateTaskRequest $request)
    {
        $input = $request->all();

        $task = $this->taskRepository->create($input);

        Flash::success('Task saved successfully.');

        return redirect(route('tasks.index'));
    }

    /**
     * Display the specified Task.
     */
    public function show($id)
    {
        $task = $this->taskRepository->find($id);

        if (empty($task)) {
            Flash::error('Task not found');

            return redirect(route('tasks.index'));
        }

        return view('tasks.show')->with('task', $task);
    }

    /**
     * Show the form for editing the specified Task.
     */
    public function edit($id)
    {
        $task = $this->taskRepository->find($id);

        if (empty($task)) {
            Flash::error('Task not found');

            return redirect(route('tasks.index'));
        }

        return view('tasks.edit')->with('task', $task);
    }

    /**
     * Update the specified Task in storage.
     */
    public function update($id, UpdateTaskRequest $request)
    {
        $task = $this->taskRepository->find($id);

        if (empty($task)) {
            Flash::error('Task not found');

            return redirect(route('tasks.index'));
        }

        $task = $this->taskRepository->update($request->all(), $id);

        Flash::success('Task updated successfully.');

        return redirect(route('tasks.index'));
    }

    /**
     * Remove the specified Task from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $task = $this->taskRepository->find($id);

        if (empty($task)) {
            Flash::error('Task not found');

            return redirect(route('tasks.index'));
        }

        $this->taskRepository->delete($id);

        Flash::success('Task deleted successfully.');

        return redirect(route('tasks.index'));
    }


         
    public function complete(Request $request)
    {

        $tasks = Task::where('id',$request->task_id)->update(['status'=>1]);
      
         $task = $this->taskRepository->find($request->task_id);

        Flash::success('Task completed successfully.');
         return view('tasks.show')->with('task', $task);
     }

      public function pending(Request $request)
    {

        $tasks = Task::where('id',$request->task_id)->update(['status'=>2]);
      
         $task = $this->taskRepository->find($request->task_id);

        Flash::success('Task pending successfully.');
         return view('tasks.show')->with('task', $task);
     }
}
