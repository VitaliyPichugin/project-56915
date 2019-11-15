<?php

use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'IndexController@index')->name('home');
});
