<?php

namespace App\Services\Task;

use App\Contracts\Dao\Task\TaskDaoInterface;
use App\Contracts\Services\Task\TaskServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

/**
 * Service class for post.
 */
class TaskService implements TaskServiceInterface
{
	/**
	 * post dao
	 */
	private $taskDao;
	/**
	 * Class Constructor
	 * @param PostDaoInterface
	 * @return
	 */
	public function __construct(TaskDaoInterface $taskDao)
	{
		$this->taskDao = $taskDao;
	}

	/**
	 * To save task
	 * @param Request $request request with inputs
	 * @return Object $post saved post
	 */
	public function savePost(Request $request)
	{
		return $this->taskDao->savePost($request);
	}

	//To delete task
	public function delete($task)
	{
		return $this->taskDao->delete($task);
	}

	//To update task
	public function updateTask($task)
	{
		return $this->taskDao->updateTask($task);
	}
}
