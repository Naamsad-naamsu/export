<?php

namespace App\Imports;

use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeeImport implements ToModel,WithHeadingRow
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

 
    public function model(array $row)
    {
        dd($row);exit;
        return new Employee([
            'code'             => $row['Code'],
            'name'             => $row['name'],
            'department'       => $row['department'],
            'qualification'    => $row['qualification'],
            'age'              => $row['age'],
            'experience'        => $row['experience'],
        ]);
    }


 
}
