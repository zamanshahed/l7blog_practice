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


Route::get('/sample', function () {
	
    return view('cust.sample');
});

Route::get('/users', 'UsersController@index');


Route::get('/show', 'UsersController@show');
Route::post('UsersController', 'UsersController@account');
Route::view('user', 'user');
Route::get('blade', 'bladController@index');

Route::view('404', '404');
// Route::view('profile', 'profile');

Route::view('profile', 'profile')->middleware('customRoutedMiddleware');

Route::group(['middleware'=>['userAuth']], function(){
		
		// Route::get('/', function () {
		//     return view('welcome');
		// });


});