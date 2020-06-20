<?php

use Illuminate\Support\Facades\Route;

Route::get('/','OminoController@index') ->name('home');
Route::get('/show/{id}','OminoController@show') ->name('show');
Route::get('/edit/{id}','OminoController@edit') ->name('edit');
Route::post('/update/{id}','OminoController@update') ->name('update');
Route::get('/delete/{id}','OminoController@delete') ->name('delete');
Route::get('/create','OminoController@create') ->name('create');
Route::post('/store','OminoController@store') ->name('store');
