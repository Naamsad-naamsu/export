<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmployeeExport;
use App\Imports\EmployeeImport;
use Illuminate\Support\Facades\Validator;

class ImportExportController extends Controller
{

   
    public function importFile(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required',
                ]
        );
        
        if ($validator->fails()) {
            $data = ['error'=> trans('messages.validation_error').'<br>'.$validator->messages()->first(),'errors'=>$validator->errors()];
           return redirect()->back()->withInput()->with($data);
        }
        
        Excel::import(new EmployeeImport, $request->file);
        return back();
    }

    public function exportFile() 
    {
        return Excel::download(new EmployeeExport, 'employeelist.csv');
    }  
}