<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home-admin', 'HomeController@admin');
Route::get('/company-admin', 'HomeController@company');
Route::get('/services','HomeController@services')->name('services');



//Auth
Route::get('/sign-up-admin','RegistrationController@adminform')->name('adminform');
Route::get('/sign-up','RegistrationController@form')->name('signupform');
Route::post('/register','RegistrationController@userSignUp')->name('signup');


// Route::get('/login','LoginController@showlogin')->name('login');
Route::post('/logon','LoginController@login')->name('logon');
Route::post('/logout','LoginController@logout')->name('logout');


//Dash

// Protected Routes - allows only logged in users
Route::middleware('auth')->group(function () {
    Route::get('/dash-admin','DashboardController@admin')->name('admindash');
    Route::get('/dash-company','DashboardController@company')->name('companydash');

    //Route::post('/logout', 'DashboardController@logout')->name('logout');
});
