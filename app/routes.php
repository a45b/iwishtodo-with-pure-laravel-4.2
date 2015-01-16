<?php

Route::get('/', array('uses' => 'HomeController@index', 'as' => 'home'));
Route::get('/register', array('uses' => 'HomeController@register', 'as' => 'register'));
Route::get('/login', array('uses' => 'HomeController@login', 'as' => 'login'));

Route::controller('user', 'UserController');

Route::group(array('before' => 'auth'), function()
{
   Route::resource('wish', 'WishController');
});
