<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use App\customer;
use App\Http\Requests\registration;
class RegistrationController extends Controller
{
    //
    function index(){
        return view('registration.index');
    }

    function store(registration $request){
        if($request->type == 'admin'){
             $admin = new admin();
             $admin->type = $request->type;
             $admin->username = $request->username;
             $admin->password = $request->password;
             $admin->email = $request->email;
             if($admin->save()){
                $request->session()->flash('msg','Successful');
                 return redirect()->route('registration.index');
             }
             else{
                $request->session()->flash('msg','Failed');
                return redirect()->route('registration.index');
             }
        }

        else{
            $customer = new customer();
            $customer->type = $request->type;
            $customer->username = $request->username;
            $customer->password = $request->password;
            $customer->email = $request->email;
            if($customer->save()){
                $request->session()->flash('msg','Successfull');
                return redirect()->route('registration.index');
            }
            else{
                $request->session()->flash('msg','Failed');
               return redirect()->route('registration.index');
            }
        }

        }
    }

