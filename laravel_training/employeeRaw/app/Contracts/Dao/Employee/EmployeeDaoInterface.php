<?php

namespace App\Contracts\Dao\Employee;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of Post
 */
interface EmployeeDaoInterface
{
  /**
   * To save post
   * @param Request $request request with inputs
   * @return Object $post saved post
   */
  public function saveEmployee(Request $request);
  public function delete($employee);
  public function updateEmployee(Request $request, $employee);
}
