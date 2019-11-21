<?php

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/{any}', 'IndexController@index')->where('any', '.*');
/*    Route::get('/', 'IndexController@index');
    Route::get('/about', 'IndexController@index');
    Route::get('/home', 'IndexController@index');
    Route::get('/setting', 'IndexController@test');*/
});
