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

Auth::routes();

Route::get('/home', 'HomeController@statusUpdate')->name('home');
Route::get('/ost', 'OSTController@UserList')->name('ost');
Route::get('/balance', 'OSTController@checkBalance')->name('balance');
Route::get('/security-basics/1', function () {
    return view('/coarses/security1/1');
});
Route::get('/security-basics/2', function () {
    return view('/coarses/security1/2');
});
Route::get('/security-basics/3', function () {
    return view('/coarses/security1/3');
});
Route::get('/security-basics/4', function () {
    return view('/coarses/security1/4');
});
Route::get('/security-basics/5', 'SecurityCoarseController@generate2FA');

Route::get('/security-basics/6', 'SecurityCoarseController@returnKey');

Route::get('/security-basics/7', function () {
    return view('/coarses/security1/7');
});
Route::get('/security-basics/8', 'SecurityCoarseController@confirmKey');

Route::get('/security-basics/9', 'OSTController@rewardUser');


