<?php

namespace App\Contracts\Services\Employee;

use Illuminate\Http\Request;

/**
 * Interface for employee service
 */
interface EmployeeServiceInterface
{
  /**
   * To save employee
   * @param Request $request request with inputs
   * @return Object $post saved employee
   */
  public function saveEmployee(Request $request);

  //To delete employee
  public function delete($employee);

  //To update employee
  public function updateEmployee(Request $request, $employee);
}
