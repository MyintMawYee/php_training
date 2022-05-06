<?php

namespace App\Http\Controllers\Employees;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Contracts\Services\Employee\EmployeeServiceInterface;

class EmployeeController extends Controller
{
    /**
     * post interface
     */
    private $employeeInterface;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(EmployeeServiceInterface $employeeServiceInterface)
    {
        $this->employeeInterface = $employeeServiceInterface;
    }
    public function index()
    {
        $employee = Employee::all();
        return view('employee.index')->with('employees', $employee);
    }
    public function create()
    {
        return view('employee.create');
    }
    public function store(Request $request)
    {
        try {
            $this->validate(request(), [
                'first_name' => ['required'],
                'last_name' => ['required'],
                'email' => ['required']
            ]);
        } catch (ValidationException $e) {
        }

        $employee = $this->employeeInterface->saveEmployee($request);
        return redirect('/');
    }
    public function details(Employee $employee)
    {
        return view('employee.details')->with('employees', $employee);
    }
    public function delete(Employee $employee)
    {
        $msg = $this->employeeInterface->delete($employee);
        return redirect('/');
    }
    public function edit(Employee $employee)
    {
        return view('employee.edit')->with('employees', $employee);
    }
    public function update(Request $request, Employee $employee)
    {
        try {
            $this->validate(request(), [
                'first_name' => ['required'],
                'last_name' => ['required'],
                'email' => ['required']
            ]);
        } catch (ValidationException $e) {
        }

        $employee = $this->employeeInterface->updateEmployee($request, $employee);
        return redirect('/');
    }
}
