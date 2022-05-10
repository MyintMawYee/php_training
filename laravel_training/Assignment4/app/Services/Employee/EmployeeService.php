<?php

namespace App\Services\Employee;

use App\Contracts\Dao\Employee\EmployeeDaoInterface;
use App\Contracts\Services\Employee\EmployeeServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

/**
 * Service class for employee
 */
class EmployeeService implements EmployeeServiceInterface
{
	/**
	 * employee dao
	 */
	private $employeeDao;
	/**
	 * Class Constructor
	 * @param EmployeeDaoInterface
	 * @return
	 */
	public function __construct(EmployeeDaoInterface $employeeDao)
	{
		$this->employeeDao = $employeeDao;
	}

	/**
	 * To save employee
	 * @param Request $request request with inputs
	 * @return Object $post saved employee
	 */
	public function saveEmployee(Request $request)
	{
		return $this->employeeDao->saveEmployee($request);
	}

	//To delete employee where id
	public function delete($employee)
	{
		return $this->employeeDao->delete($employee);
	}

	//To update employee where id
	public function updateEmployee(Request $request, $employee)
	{
		return $this->employeeDao->updateEmployee($request, $employee);
	}
}
