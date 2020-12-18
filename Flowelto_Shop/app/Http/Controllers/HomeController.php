<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\homecategory;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Carbon\Carbon;
use Auth;

class HomeController extends Controller
{
    public function homepage(){
        $CategoryFlower = homecategory::all();
        return view('Home_Flowelto',['homecategory'=>$CategoryFlower]);
    }

    public function Register(Request $request)
    {
       
        $validator = Validator::make($request->all(),
        [
            'username'=>'required|string',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed|min:8',           
            'address'=>'required|string|min:10',
            'gender'=>'required|in:Male,Female',
            'DOB'=>'required'
        ]);
              
        if ($validator->fails())
        {           
            return Redirect::back()->withErrors($validator)->withInput();
        }      
        
        \DB::table('users')->insert
        (
            [
                'name'=>$request->username,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'Address'=>$request->address,
                'Gender'=>$request->gender,
                'DOB'=>Carbon::createFromFormat('d/m/Y', $request->DOB)->format('Y-m-d'),
                'roleadmin'=>'0'
            ]

        );
        return redirect('/Login');
    }

    public function Login(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
        'email'=>'required|email',
        'password'=>'required|min:8',
        ]);
        if($validator->fails())
        {
            return redirect('/Login')->withError($validator)->withInput();
        }
        
        if(Auth::attempt(
            [
            'email'=>$request->email,
            'password'=>$request->password
            ]))
            {
                return redirect('/Home');
            }
        
        return redirect('/Login');
    }

    public function changepassword(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
             'password'=>'required|password',
             'newpassword'=>'required|min:8|confirmed',
             'confnewpassword'=>'required|newpassword'
        ]);
        if(!Hash::check($validator['password'],Auth::customers()->password))
        {
            return redirect()->back()->with('Error');
        }

        $users = Auth::user();
        $users->password = bcrypt($request->get('newpassword'));
        $users->save();

        return redirect()->back()->with("success","Password changed successful");
    }

    function Logout(){
        Auth::Logout();
        return redirect('/Login');
    }
}
