<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');

Route::get('/registration', 'RegistrationController@index')->name('registration.index');
Route::post('/registration', 'RegistrationController@store');

Route::get('/adminhome', 'adminController@index')->name('adminHome.index');

Route::get('/customerhome', 'customerController@index')->name('customerHome.index');

Route::get('/userlist', 'adminController@userlist')->name('customer.list');

Route::get('/customer/edit/{id}', 'adminController@customeredit')->name('customer.edit');
Route::post('/customer/edit/{id}', 'adminController@customerupdate');


Route::get('/customer/delete/{id}', 'adminController@customerdelete')->name('customer.delete');

Route::get('/addbook', 'adminController@addbook')->name('admin.addbook');
Route::post('/addbook', 'adminController@storebook');

Route::get('/categories', 'CustomerController@categories');

