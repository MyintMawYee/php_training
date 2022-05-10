<?php

namespace App\Dao\Employee;


use App\Contracts\Dao\Employee\EmployeeDaoInterface;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;

/**
 * Data accessing object for post
 */
class EmployeeDao implements EmployeeDaoInterface
{
    
    /**
     * To save employee
     * @param Request $request request with inputs
     * @return Object $post saved post
     */
    public function saveEmployee(Request $request)
    {
        $data = request()->all();
        DB::insert('INSERT into employees (first_name, last_name, email, city, country, job_title ) VALUES (?, ?, ?, ?, ?, ?)', [$data['first_name'], $data['last_name'],$data['email'],$data['job_title'],$data['city'],$data['country']]);

        session()->flash('success', 'Employee created succesfully');
    }

    //To delete Employee where id
    public function delete($employee)
    {
        DB::delete('delete from employees where id=?', [$employee->id]);
    }
    
    //To update Employee where id
    public function updateEmployee(Request $request, $employee)
    {
        $data = request()->all();
        DB::update('update employees set first_name = ?, last_name=?, email=?, city=?, country=?, job_title=? where id = ?',[$data['first_name'], $data['last_name'], $data['email'], $data['job_title'], $data['city'], $data['country'], $employee->id]);

        session()->flash('success', 'Employee created succesfully');
    }
}
