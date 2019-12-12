<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;

class customerController extends Controller
{
    //
    function index(){
        $book = book :: all();
        return view('customer.index')->with('users', $book);
    }
}
