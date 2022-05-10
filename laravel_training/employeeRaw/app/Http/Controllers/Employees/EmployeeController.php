<?php

namespace App\Http\Controllers\Employees;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Contracts\Services\Employee\EmployeeServiceInterface;
use Illuminate\Support\Facades\DB;

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
        $employees = DB::table('employees')->get();
        return view('employee.index', compact('employees'));
    }
    public function create()
    {
        return view('employee.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'city' => 'required',
            'country' => 'required',
            'job_title' => 'required'
        ]);

        $employee = $this->employeeInterface->saveEmployee($request);
        return redirect('/');
    }

    public function delete(Employee $employee)
    {
        $msg = $this->employeeInterface->delete($employee);
        return redirect('/')->with('success', 'You have successfully deleted');
    }
    public function edit(Employee $employee)
    {
        return view('employee.edit')->with('employees', $employee);
    }
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'city' => 'required',
            'country' => 'required',
            'job_title' => 'required'
        ]);

        $employee = $this->employeeInterface->updateEmployee($request, $employee);
        return redirect('/')->with('success', 'You have successfully updated');
    }
}
