<?php

namespace App\Services\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    //collect all employee data
    public function collection()
    {
        return Employee::all();
    }

    //download with headers
    public function headings(): array
    {
        return [
            'ID',
            'First Name',
            'Last Name',
            'Email',
            'Job Title',
            'City',
            'Country',
            'Created At',
            'Updated At',
        ];
    }
}
