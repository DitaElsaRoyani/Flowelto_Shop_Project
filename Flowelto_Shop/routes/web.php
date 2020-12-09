<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/Login',function(){
    return view('Login_Flowelto');
});

Route::get('/Register',function(){
    return view('Register_Flowelto');
});

// Route::get('/Home',function(){
//     return view('Home_Flowelto');
// });

Route::get('/MyCart',function(){
    return view('MyCart');
});

Route::get('/transactionhistori',function(){
    return view('TransaksiHistori');
});

Route::get('/Home','HomeController@homepage');