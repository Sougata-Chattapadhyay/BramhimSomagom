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


Route::get('/home',function(){
    return view('home');
});
Route::get('/festival',function(){
    return view('festival');
});
Route::get('/priest','App\Http\Controllers\PriestController@index');

Route::get('/booking/{id}','App\Http\Controllers\BookingController@edit');
Route::post('/booking/{id}','App\Http\Controllers\BookingController@store');
Route::get('/booked',function(){
    return view('booked_view');
});
// Route::get('/getdata','App\Http\Controllers\BookingController@getData');

Route::get('/footer',function(){
    return view('footer');
});
Route::get('/getdata','App\Http\Controllers\BookingController@getData');
Route::get('/under',function(){
    return view('underconstruction');
});
// Route::get('/login',function(){
//     return view('login');
// });
Route::get('/', function () {
    return view('login');
});
Route::get('/adminPanel',function(){
    return view('admin');
});
Route::post('/','App\Http\Controllers\loginController@check');
Route::get('/admin','App\Http\Controllers\PriestController@show');
Route::post('/addPriest','App\Http\Controllers\PriestController@store');
Route::get('/deletePriest/{id}','App\Http\Controllers\PriestController@destroy');
Route::get('/editPriest/{id}','App\Http\Controllers\PriestController@edit');
Route::post('/updatePriest/{id}','App\Http\Controllers\PriestController@update');
Route::get('/addFestivals','App\Http\Controllers\CustomerController@index');
Route::get('/addFestivals/{id}','App\Http\Controllers\CustomerController@destroy');
Route::post('/addFestivals','App\Http\Controllers\CustomerController@store');
Route::get('/logout','App\Http\Controllers\loginController@destroy');

Route::get('/admin_booked','App\Http\Controllers\BookingController@adminData');
Route::get('/admin_Appruved/{id}','App\Http\Controllers\BookingController@adminApproval');
Route::get('admin_Cancel/{id}','App\Http\Controllers\BookingController@adminCancel');
Route::get('admin_Dalete/{id}','App\Http\Controllers\BookingController@adminDelete');