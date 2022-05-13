<?php

namespace App\Contracts\Services\Task;

use Illuminate\Http\Request;

/**
* Interface for post service
*/
interface TaskServiceInterface
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
	public function updateTask($task);
}
