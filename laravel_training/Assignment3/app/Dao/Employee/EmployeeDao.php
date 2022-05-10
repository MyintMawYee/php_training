<?php

namespace App\Dao\Employee;


use App\Contracts\Dao\Employee\EmployeeDaoInterface;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Validation\ValidatesRequests;

/**
 * Data accessing object for post
 */
class EmployeeDao implements EmployeeDaoInterface
{
    /**
     * To save employee
     * @param Request $request request with inputs
     * @return Object $post saved employee
     */
    public function saveEmployee(Request $request)
    {
        $data = request()->all();

        $employee = new Employee();
        //On the left is the field name in DB and on the right is field name in Form/view
        $employee->first_name = $data['first_name'];
        $employee->last_name = $data['last_name'];
        $employee->email = $data['email'];
        $employee->job_title = $data['job_title'];
        $employee->city = $data['city'];
        $employee->country = $data['country'];
        $employee->save();

        session()->flash('success', 'Employee created succesfully');
    }

    //To delete employee 
    public function delete($employee)
    {
        $employee->delete();
    }

    //To update employee
    public function updateEmployee(Request $request, $employee)
    {
        $data = request()->all();
        //On the left is the field name in DB and on the right is field name in Form/view
        $employee->first_name = $data['first_name'];
        $employee->last_name = $data['last_name'];
        $employee->email = $data['email'];
        $employee->job_title = $data['job_title'];
        $employee->city = $data['city'];
        $employee->country = $data['country'];
        $employee->save();

        session()->flash('success', 'Employee created succesfully');
    }
}
