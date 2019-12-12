<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController extends Controller
{
    //
    function index(){
        return view('customer.index');
    }
}
