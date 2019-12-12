<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use App\customer;
use App\Http\Requests\login;

class LoginController extends Controller
{
    //
    function index(){
        return view('login.index');
    }
    function verify(login $request){

        $admin = admin:: where('username', $request->username)
                       ->where('password',$request->password)
                       ->first();
       if(count($admin)>0){
           $request->session()->put('uname', $request->input('username'));
           return redirect()->route('adminHome.index');
        // echo 'admin page';
       }
       else{
        $customer = customer:: where('username', $request->username)
        ->where('password',$request->password)
        ->first();
            if(count($customer)>0){
                $request->session()->put('uname', $request->input('username'));
                 return redirect()->route('customerHome.index');
                //echo 'c page';
            }
            else{
                $request->session()->flash('msg', 'invalid username/password');
                return redirect()->route('login.index');
            }

       }
        
    }
}
