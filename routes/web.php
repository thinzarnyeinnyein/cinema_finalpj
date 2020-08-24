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

// Route::get('/', function () {
//     return view('welcome');
// });


//Backend 
Route::middleware('role:admin')->group(function(){

Route::get('/dashboard','BackendController@dashboard')->name('dashboard');
Route::resource('movies','MovieController');

Route::resource('user','UserController');

});

//Frontend
Route::get('/','FrontendController@home')->name('homepage');
Route::get('payment','FrontendController@payment')->name('paymentpage');
Route::get('about','FrontendController@about')->name('aboutpage');
Route::get('seat','FrontendController@seat')->name('seatpage');
Route::get('booking','FrontendController@booking')->name('bookingpage');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
