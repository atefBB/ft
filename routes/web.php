<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/members', 'MemberController@index')->name('members');

Route::get('/families', 'FamilyController@index')->name('families');
