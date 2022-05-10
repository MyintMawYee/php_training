<?php

namespace App\Contracts\Services\Employee;

use Illuminate\Http\Request;

/**
 * Interface for employee service
 */
interface EmployeeServiceInterface
{
  /**
   * To save Employee
   * @param Request $request request with inputs
   * @return Object $employee saved employee
   */
  public function saveEmployee(Request $request);

  //To delete Employee where id
  public function delete($employee);

  //To update Employee where id
  public function updateEmployee(Request $request, $employee);
}
