<?php

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/{any}', 'IndexController@index')->where('any', '.*');
});
