<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'department',
        'qualification',
        'age',
        'experience',
    ];

    public static function getExcel(){


        $query = Employee::select(['code','name','department','qualification','age','experience']);

       $employee = $query->get();
       return $employee;
    }
}
