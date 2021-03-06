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


Auth::routes();


Route::get('login', 'Auth\LoginController@login')->name('login');
Route::post('login', 'Auth\LoginController@postLogin')->name('postLogin');
Route::get('admin/index', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
// user route
Route::get('admin/users', 'HomeController@users')->name('users');
Route::get('admin/users-admin', 'HomeController@usersAdmin')->name('usersAdmin');
Route::get('admin/user/add', 'HomeController@addUser')->name('addUser');
Route::post('admin/user/add', 'HomeController@postAddUser')->name('postAddUser');
Route::get('admin/user/edit/{id}', 'HomeController@editUser')->name('editUser');
Route::post('admin/user/edit/{id}', 'HomeController@postEditUser')->name('postEditUser');
Route::post('admin/user/edit-password/{id}', 'HomeController@postEditPassword')->name('postEditPassword');
Route::get('user-booking/{mssv}', 'HomeController@userBooking')->name('userBooking');
Route::get('user-change-booking/{mssv}/{regis_id}', 'HomeController@userChangeBooking')->name('userChangeBooking');
Route::get('user-delete-booking/{mssv}/{id}', 'HomeController@userDeleteBooking')->name('userDeleteBooking');

// end user route
// lab route
Route::get('admin/labs', 'HomeController@labs')->name('labs');
Route::get('admin/lab/add', 'HomeController@addLab')->name('addLab');
Route::post('admin/lab/add', 'HomeController@postAddLab')->name('postAddLab');
Route::get('admin/lab/edit/{id}', 'HomeController@editLab')->name('editLab');
Route::post('admin/lab/edit/{id}', 'HomeController@postEditLab')->name('postEditLab');
Route::get('admin/lab/{id}', 'HomeController@lab')->name('lab');
// end lab route



Route::get('/', 'Controller@home')->name('homeUser');
// booking 
Route::get('booking/{id}', 'Controller@booking')->name('booking');
Route::get('seat-render/{id}', 'Controller@seatRender')->name('seatRender');
Route::get('check/{id}/{timeIn}/{timeOut}', 'Controller@checkSeatFree')->name('checkSeat');
Route::get('history/{id}', 'Controller@history')->name('history');
// end booking


// Route::get('/listLab', function () {
//     return view('labs.listLab');
// });

// Route::get('/reset_passwordd', function () {
//     return view('auth/passwords/reset');
// });

//

// Route::get('/home', 'HomeController@index')->name('home');

// Route::post('postLogin',['as'=>'postLogin','uses'=>'Auth\LoginController@postLogin']);

// Route::get('register',['as'=>'register','uses'=>'Auth\RegisterController@getRegister']);
// Route::post('register',['as'=>'register','uses'=>'Auth\RegisterController@postRegister']);


// Route::get('logout',['as'=>'logout','uses'=>'Auth\LoginController@logout']);

//Lab
// Route::get('listLab',['as'=>'listLab','uses'=>'HomeController@listLab']);
// Route::get('addLab',['as'=>'addLab','uses'=>'HomeController@addLab']);
// Route::post('postAddLab',['as'=>'postAddLab','uses'=>'HomeController@postAddLab']);
// Route::get('deleteLab',['as'=>'deleteLab','uses'=>'HomeController@deleteLab']);
// Route::get('editLab',['as'=>'editLab','uses'=>'HomeController@editLab']);


//User
// Route::get('listUser',['as'=>'listUser','uses'=>'HomeController@listUser']);
// Route::get('addUser',['as'=>'addUser','uses'=>'HomeController@addUser']);
// Route::post('postAddUser',['as'=>'postAddUser','uses'=>'HomeController@postAddUser']);
// Route::get('deleteUser',['as'=>'deleteUser','uses'=>'HomeController@deleteUser']);
// Route::get('editUser',['as'=>'editUser','uses'=>'HomeController@editUser']);