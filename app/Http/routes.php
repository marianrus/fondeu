<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/**
 *
 */
Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('welcome');
});

//Route::get('dashboard',[
//    'middleware' => 'auth',
//    'dashboard' => 'DashboardController@index'
//]);


Route::get('dashboard','DashboardController@index');
Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login' ,'Auth\AuthController@postLogin');
Route::get('auth/logout','Auth\AuthController@getLogout');

Route::get('articles-admin','ArticlesAdminController@index');
Route::get('articles-admin-form','ArticlesAdminController@getForm');
Route::post('articles-admin-form','ArticlesAdminController@create');


Route::get('category-admin','CategoryAdminController@index');
Route::get('eu-projects-admin','EuProjectsAdminController@index');
Route::get('partners-admin','PartnersAdminController@index');