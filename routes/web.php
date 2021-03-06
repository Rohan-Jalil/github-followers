<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['uses' => 'GithubController@index', 'as' => 'index']);

Auth::routes();

Route::get('/home', ['uses' => 'GithubController@index', 'as' => 'index']);

Route::get('/username', ['uses' => 'GithubController@show', 'as' => 'show']);

Route::get('/followers/{username}', ['uses' => 'GithubController@followers', 'as' => 'followers']);

Route::get('/showMoreFollowers', ['uses' => 'GithubController@showMoreFollowers', 'as' => 'showMoreFollowers']);
