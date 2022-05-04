<?php

namespace App\Http\Controllers\Tasks;

use App\Contracts\Services\Task\TaskServiceInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Validation\ValidationException;

class TaskController extends Controller
{
    /**
     * post interface
     */
    private $taskInterface;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TaskServiceInterface $taskServiceInterface)
    {
        $this->taskInterface = $taskServiceInterface;
    }

    public function index()
    {
        $task = Task::all();
        return view('tasks.index')->with('tasks', $task);
    }
    public function create()
    {
        return view('tasks.create');
    }
    public function store(Request $request)
    {
        try {
            $this->validate(request(), [
                'name' => ['required'],
                'description' => ['required']
            ]);
        } catch (ValidationException $e) {
        }

        $task = $this->taskInterface->savePost($request);
        return redirect('/');
    }
    public function details(Task $task)
    {
        return view('tasks.details')->with('tasks', $task);
    }
    public function delete(Task $task)
    {
        $msg = $this->taskInterface->delete($task);
        return redirect('/');
    }
    public function edit(Task $task)
    {
        return view('tasks.edit')->with('tasks', $task);
    }
    public function update(Request $request, Task $task)
    {
        try {
            $this->validate(request(), [
                'name' => ['required'],
                'description' => ['required']
            ]);
        } catch (ValidationException $e) {
        }

        $task = $this->taskInterface->updateTask($request, $task);
        return redirect('/');
    }
}
