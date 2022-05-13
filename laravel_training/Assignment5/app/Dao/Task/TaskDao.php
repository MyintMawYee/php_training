<?php

namespace App\Dao\Task;


use App\Contracts\Dao\Task\TaskDaoInterface;
use App\Models\Post;
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
        $post = Post::updateOrCreate(['id' => $request->id], [
            'title' => $request->title,
            'description' => $request->description
        ]);

        return response()->json(['code' => 200, 'message' => 'Post Created successfully', 'data' => $post], 200);
    }

    //To delete task
    public function delete($task)
    {
        $post = Post::find($task)->delete();
        return response()->json(['success' => 'Post Deleted successfully']);
    }

    //To update task
    public function updateTask($task)
    {
        $post = Post::find($task);

        return response()->json($post);
    }
}
