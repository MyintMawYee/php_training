<?php

namespace App\Contracts\Dao\Employee;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of Post
 */
interface EmployeeDaoInterface
{
  /**
   * To save Employee
   * @param Request $request request with inputs
   * @return Object $post saved employee
   */
  public function saveEmployee(Request $request);

  //To delete Employee where id
  public function delete($employee);

  //To update Employee where id
  public function updateEmployee(Request $request, $employee);
}
