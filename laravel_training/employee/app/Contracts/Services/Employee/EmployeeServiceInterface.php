<?php

namespace App\Contracts\Services\Employee;

use Illuminate\Http\Request;

/**
 * Interface for employee service
 */
interface EmployeeServiceInterface
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
