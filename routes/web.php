<?php

Route::resource('/', 'TestController');

Route::get('/tests', 'TestController@index')->name('tests');
