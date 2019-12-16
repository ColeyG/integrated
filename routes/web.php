<?php

Route::get('/', 'MediaController@index')->name('home');

Route::get('/login', 'MediaController@login')->name('login');

Route::get('/help', 'MediaController@help')->name('help');

Route::get('/signup', 'MediaController@signup')->name('signup');

Route::get('/create', 'MediaController@create')->name('create');

Route::get('/welcome', 'MediaController@welcome')->name('welcome');

Route::post('/postaction', 'MediaController@postaction')->name('postaction');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes(['reset' => false, 'remember' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('home', function(){
  return redirect(url('/'));
  });
