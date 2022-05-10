<?php

namespace App\Dao\Task;


use App\Contracts\Dao\Task\TaskDaoInterface;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Validation\ValidatesRequests;

/**
 * Data accessing object for post
 */
class TaskDao implements TaskDaoInterface
{
    /**
     * To save task
     * @param Request $request request with inputs
     * @return Object $post saved post
     */
    public function savePost(Request $request)
    {
        $data = request()->all();

        $task = new Task();
        //On the left is the field name in DB and on the right is field name in Form/view
        $task->name = $data['name'];
        $task->description = $data['description'];
        $task->save();

        session()->flash('success', 'Todo created succesfully');
    }

    //To delete task
    public function delete($task)
    {
        $task->delete();
    }

    //To update task
    public function updateTask(Request $request, $task)
    {
        $data = request()->all();
        //On the left is the field name in DB and on the right is field name in Form/view
        $task->name = $data['name'];
        $task->description = $data['description'];
        $task->save();

        session()->flash('success', 'Todo created succesfully');
    }
}
