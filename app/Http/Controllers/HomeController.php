<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Appointment;


class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id())
        {
          if(Auth::user()->usertype=='0')
          {
              return view('user.home');
          }
          else{
              return view('admin.home');
          }
        }
        else{
            return redirect()->back();
        }
    }
    public function index()
{
    return view('user.home');
}


public function appointment(Request $request)
{
$request->validate(
    [
        'name' =>'required|alpha',
        'email' =>'required|email',
        'date' => 'required|date',
        'address' => 'required',
        'travel' => 'required|alpha',
        'people' =>'required|numeric|between:1,20',
        'number' =>'required|digits_between:10,11',
        
    ]
    );

$data=new appointment;
$data->name=$request->name;
$data->email=$request->email;
$data->date=$request->date;
$data->address=$request->address;
$data->travel=$request->travel;
$data->people=$request->people;
$data->number=$request->number;
$data->message=$request->message;
if(Auth::id()){
$data->user_id=Auth::user()->id;
}
$data->save();
return redirect()->back()->with('message', 'Your Ticket Slot is Booked, we will contact you soon!');
}
}


