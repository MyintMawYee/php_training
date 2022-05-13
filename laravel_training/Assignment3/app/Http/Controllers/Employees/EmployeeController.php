<?php

namespace App\Http\Controllers\Employees;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Contracts\Services\Employee\EmployeeServiceInterface;
use App\Services\Exports\UsersExport;
use App\Services\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Mail\SendDeleteMail;
use Illuminate\Support\Facades\Mail;

class EmployeeController extends Controller
{
    /**
     * employee interface
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

    //To show employee list in user view
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    //To show create employee form
    public function create()
    {
        return view('employee.create');
    }

    //To store employee data into database
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

    //To delete employee
    public function delete(Employee $employee)
    {
        $msg = $this->employeeInterface->delete($employee);

        $details = [
            "name" => $employee->name,
            "message" => "Your record have been deleted",
        ];

        Mail::to($employee->email)->send(new SendDeleteMail($details));
        return redirect('/')->with('success', 'You have successfully deleted');
    }

    //To show employee edit form
    public function edit(Employee $employee)
    {
        return view('employee.edit')->with('employees', $employee);
    }

    //To update employee
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

    //export excel file
    public function export()
    {
        return Excel::download(new UsersExport, 'employees.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    //import excel file
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);
        Excel::import(new UsersImport, $request->file('file'));
        return back();
    }
}
