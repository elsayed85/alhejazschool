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

Route::group(['prefix' => 'contact-us', 'as' => 'contact_us.'], function () {
    Route::get('/', "ContactUsController@index")->name('index');
    Route::post('/', "ContactUsController@send")->name('send');
});
