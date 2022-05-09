<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;

class UsersImport implements ToCollection, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(Collection $rows)
    {
        Validator::make($rows->toArray(), [
            '*.first_name' => 'required',
            '*.last_name' => 'required',
            '*.email' => 'required',
            '*.city' => 'required',
            '*.country' => 'required',
            '*.job_title' => 'required',
        ])->validate();

        foreach ($rows as $row) {
            Employee::create([
                'first_name' => $row['first_name'],
                'last_name' => $row['last_name'],
                'email' => $row['email'],
                'city' => $row['city'],
                'country' => $row['country'],
                'job_title' => $row['job_title'],
            ]);
        }
    }
}
