<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'TestController@home')
  -> name('home');

Route::get('employee/{id}', 'TestController@show')
  -> name('show');

Route::get('create/employee', 'TestController@create')
  -> name('create');

Route::post('store/employee', 'TestController@store')
  -> name('store');

Route::get('destroy/{id}', 'TestController@destroy')
  -> name('destroy');
