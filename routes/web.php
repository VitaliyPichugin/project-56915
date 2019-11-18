<?php

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'IndexController@index')->name('home');
    Route::get('/home', 'IndexController@index')->name('home');
});
