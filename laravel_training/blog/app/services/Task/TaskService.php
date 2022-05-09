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
   * To save post
   * @param Request $request request with inputs
   * @return Object $post saved post
   */
  public function savePost(Request $request)
  {
    return $this->taskDao->savePost($request);
  }
  public function delete($task)
  {
    return $this->taskDao->delete($task);
  }
  public function updateTask(Request $request, $task)
  {
    return $this->taskDao->updateTask($request, $task);
  }
}