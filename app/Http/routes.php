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

/**********************************************************
 *                      Frontend                          *
 *********************************************************/

Route::get('/','HomeController@index');

/**
 * Courses
 */
Route::get('/cursuri','CoursesController@index');
Route::get('/curs/{id}','CoursesController@show');
Route::post('/filter','CoursesController@filterCourses');

/**
 * Courses Category
 */
Route::get('/categorie','CoursesCategoryController@index');
Route::get('/categorie/{id}','CoursesCategoryController@show');


/**
 * Account
 */
Route::get('/cont','AccountController@index');

/**
 * Frontend auth
 */
Route::get('/autentificare','FrontendAuth\FrontendAuthController@getLogin');
Route::post('/autentificare/login','FrontendAuth\FrontendAuthController@postLogin');

/**
 * Article
 */
Route::get('/articles','ArticleController@index');
Route::get('/articles/{id}','ArticleController@show');


/**
 * Helper controller
 */

Route::get('/helper/cities/{id}','HelperController@getCities');








/**********************************************************
 *                      Backend                           *
 *********************************************************/

/**
 * Dashboard
 */
Route::get('dashboard','DashboardController@index');
Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login' ,'Auth\AuthController@postLogin');
Route::get('auth/logout','Auth\AuthController@getLogout');

/**
 * Admin Articles
 */
Route::get('articles-admin','ArticlesAdminController@index');
Route::get('articles-admin/{id}','ArticlesAdminController@edit');
Route::get('articles-admin-form','ArticlesAdminController@getForm');
Route::post('articles-admin-form','ArticlesAdminController@create');
Route::put('articles-admin-form/{id}','ArticlesAdminController@update');
Route::delete('articles-admin/{id}','ArticlesAdminController@destroy');


/**
 * Admin  Category
 */
Route::get('category-admin','CategoryAdminController@index');
Route::get('category-admin-createForm','CategoryAdminController@getCreateForm');
Route::get('category-admin/{id}','CategoryAdminController@show');
Route::put('category-admin/{id}','CategoryAdminController@update');
Route::delete('category-admin/{id}','CategoryAdminController@destroy');
Route::post('category-admin','CategoryAdminController@create');

/**
 * Admin Eu Projects
 */
Route::get('eu-projects-admin','EuProjectsAdminController@index');
Route::get('eu-projects-createForm','EuProjectsAdminController@createForm');
Route::post('eu-project-admin','EuProjectsAdminController@create');
Route::delete('eu-project-admin/{id}','EuProjectsAdminController@destroy');

/**
 * Admin Partners
 */
Route::get('partners-admin','PartnersAdminController@index');

/**
* Admin Courses
 */
Route::get('courses-admin','CoursesAdminController@index');
Route::post('courses-admin','CoursesAdminController@create');
Route::get('courses-admin-form/{id}','CoursesAdminController@editForm');
Route::put('courses-admin/{id}','CoursesAdminController@edit');
Route::delete('courses-admin/{id}','CoursesAdminController@destroy');


//http://www.johnpapa.net/toastr100beta/
//View::composer('layouts.frontend.master-menu','App\Composers\MenuComposer');

// Display all SQL executed in Eloquent
Event::listen('illuminate.query', function($query)
{
    DB::getQueryLog();
});