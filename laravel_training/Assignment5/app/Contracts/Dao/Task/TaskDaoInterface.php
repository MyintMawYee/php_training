<?php

namespace App\Contracts\Dao\Task;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of Post
 */
interface TaskDaoInterface
{
	/**
	* To save task
	* @param Request $request request with inputs
	* @return Object $post saved post
	*/
	public function savePost(Request $request);

	//To delete task
	public function delete($task);

	//To update task
	public function updateTask(Request $request, $task);
}
