<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployeeExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Employee::getExcel();
    }

    public function headings(): array
    {
        return [
            'Code',
            'Name',
            'Department',
            'Qualification',
            'Age',
            'Experience',
        ];
    }
}
