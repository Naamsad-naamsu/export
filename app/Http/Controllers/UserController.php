<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Employee;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function index()
    {
        $users  =   Employee::get();
        return view('user.index',['user'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|unique:employees,code',
            'name' => 'required',
            'department'=> 'required',
            'qualification'=> 'required',
            'age'=> 'required',
            'experience'=> 'required',
                ]
        );

        if ($validator->fails()) {
            $data = ['error'=> trans('messages.validation_error').'<br>'.$validator->messages()->first(),'errors'=>$validator->errors()];
           return redirect()->back()->withInput()->with($data);
        }
        try{
            $data = $request->all();
            $input = [
                'code'          => $data['code'],
                'name'          => $data['name'],
                'department'    => $data['department'],
                'qualification' => $data['qualification'],
                'age'           => $data['age'],
                'experience'    => $data['experience'],
            ];
            $employee = Employee::create($input);

        }catch (Exception $ex) {
            return redirect('users')->with('errors','Error in processing request.');
       }
        return redirect('users')->with('success','Employee saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Employee::where('id',$id)->first();
        return view('user.edit',['user'=>$user]);
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
                'name' => 'required',
                'department'=> 'required',
                'qualification'=> 'required',
                'age'=> 'required',
                'experience'=> 'required',
                    ]
            );
        if ($validator->fails()) {
            $data = ['error'=> trans('messages.validation_error').'<br>'.$validator->messages()->first(),'errors'=>$validator->errors()];
           return redirect()->back()->withInput()->with($data);
        }

        $employee                 =   Employee::find($id);
        $employee->name           =   $request->name;
        $employee->department     =   $request->department;
        $employee->qualification  =   $request->qualification;
        $employee->age            =   $request->age;
        $employee->experience     =   $request->experience;

        $save                     =   $employee->save();

        return redirect('users')->with('success','Employee updated successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
