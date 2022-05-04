<?php

namespace App\Contracts\Services\Task;

use Illuminate\Http\Request;

/**
 * Interface for post service
 */
interface TaskServiceInterface
{
  /**
   * To save post
   * @param Request $request request with inputs
   * @return Object $post saved post
   */
  public function savePost(Request $request);
  public function delete($task);
  public function updateTask(Request $request, $task);
}
