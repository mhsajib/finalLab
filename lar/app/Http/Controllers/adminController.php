<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
use App\customer;

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
        $customer = customer :: all();
        return view('admin.userlist')->with('users', $customer);
    }
    function customeredit($id){
         $customer = customer::find($id);
         return view('admin.customeredit')->with('user', $customer);
    }
    function customerupdate(Request $request, $id){
        $customer = customer::find($id);
        //$customer = new customer();
       // $customer->type = $request->type;
        $customer->username = $request->username;
        $customer->password = $request->password;
        $customer->email = $request->email;
        $customer->save();
        return redirect()->route('customer.list');
   }
    function customerdelete($id){
        $customer = customer::find($id);
        $customer->delete();
        return redirect()->route('customer.list');

    }

}
