<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


//PagesController
Route::get('/index' , 'PagesController@index')->name('index');
Route::get('/aboutus' , 'PagesController@aboutus');
Route::get('/our-event' , 'PagesController@event');
Route::get('/blogs' , 'PagesController@blog');
Route::get('/our-courses' , 'PagesController@courses');
Route::get('/our-teacher' , 'PagesController@teacher');
Route::get('/filterable-gallery' , 'PagesController@gallery');
Route::get('/contactus' , 'PagesController@contactus');
Route::get('/teachershow' , 'PagesController@teacherShow');

//Login and Register
Route::post('register','RegisterController@register')->name('register');
//Route::get('/index','Login1Controller@showLoginForm');
Route::post('login','Login1Controller@login')->name('login');
Route::get('/logout','Login1Controller@logout')->name('logout');

//User
Route::get('/users/{user}/edit', 'UsersController@edit');
Route::patch('/users/{user}', 'UsersController@update')->name('update');

//Blog Controller
Route::resource('blogs', 'BlogsController');

//Comment Controller
Route::get('comments', 'CommentsController@index');
Route::post('comments', 'CommentsController@store')->name('storing');
//Route::get('comments', 'CommentsController@show');

//Reply Controller
Route::post('replies', 'ReplysController@store')->name('replying');

//Contact Controller
Route::post('contactus', 'ContactUsController@contact')->name('contacting');


