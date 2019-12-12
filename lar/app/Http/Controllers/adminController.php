<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;

class adminController extends Controller
{
    //
    function index(){
        return view('admin.index');
    }
    function addbook(){
        return view('admin.addbook');
    }

    function storebook(Request $request){
        $book = new book();
        $book->bookname = $request->bookname;
        $book->categories = $request->categories;
        $book->author = $request->author;
        $book->price = $request->price;
        $book->description = $request->description;
        if($book->save()){
           $request->session()->flash('msg','Successful');
            return redirect()->route('admin.addbook');
        }
        else{
           $request->session()->flash('msg','Failed');
           return redirect()->route('admin.addbook');
        }
    }

    function userlist(){
        return view('admin.userlist');
    }

}
