<?php

use App\Mail\TestMail;
use App\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'site.', 'namespace' => 'Site'], function () {
    Route::get('/', "HomeController@index")->name('home');
    Route::group(['prefix' => 'contact-us', 'as' => 'contact_us.'], function () {
        Route::get('/', "ContactUsController@index")->name('index');
        Route::post('/', "ContactUsController@send")->name('send');
    });
    Route::get("/p/{page:slug}", "PageController@show")->name('page.show');
});


Auth::routes(['register' => false]);

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('test', function () {
    Artisan::call("storage:link");
});
