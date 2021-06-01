<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Employee;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
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
        $user = Auth::user();
        $employee=Employee::get();
        if($user->type=='ADMIN'){
            return view('home.index',['user'=>$employee]);

        }
        else if($user->type=='USER'){
            return view('user.index',['user'=>$employee]);
        }
    }

    public function view()
    {
        $user = Auth::user();
        $users= User::get();
        $date = date('Y-m-d');
        $tdate = date('Y-m-d',strtotime('+1 day'));
        $category =  RoomCategory::getAll();
        $available =  RoomAvailability::getAll($date);
        $availableroom =  RoomAvailability::getroom($date);
        $booking =  RoomBooking::getAll($date);
        $data = ['category' => $category, 'date'=> $date, 'tdate'=> $tdate, 'booking'=>$booking, 'available'=> $available,'availableroom'=> $availableroom, 'user'=> $user, 'users'=> $users];
        return view('home.show')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
