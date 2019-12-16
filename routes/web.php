<?php

Route::get('/', 'MediaController@index')->name('home');

Route::get('/login', 'MediaController@login')->name('login');

Route::get('/signup', 'MediaController@signup')->name('signup');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes(['reset' => false, 'remember' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('home', function(){
  return redirect(url('/'));
  });
