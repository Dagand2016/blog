<?php

Route::resource('/', 'TestController');

Route::get('/', 'TestController@index')->name('tests');
Route::get('/create', 'TestController@create')->name('create');
Route::post('/create', 'TestController@store')->name('store');
Route::delete('delete{test}', 'TestController@destroy')->name('delete');

