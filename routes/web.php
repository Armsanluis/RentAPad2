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



Route::get('/', 'PagesController@index');

Route::get('/home', 'PagesController@home');

Route::get('/buy', 'PagesController@buy');

Route::get('/rent', 'PagesController@rent');

Route::get('/account', 'PagesController@account');

Route::get('/myposts', 'PagesController@myposts');

Route::get('/editprofile', 'PagesController@editprofile');

Route::get('/dashboard', 'PagesController@dashboard')->middleware('admin');

Route::get('/userprofile', 'PagesController@userprofile');

Route::get('/list', 'PagesController@list');

Route::resource('/posts', 'PostsController');

Route::get('/create', 'PostsController@create');

Route::post('/store', 'PostsController@store');

Route::get('/listofusers', 'PagesController@listofusers')->middleware('admin');

Route::get('/listofposts', 'PagesController@listofposts')->middleware('admin');

Route::get('/addnews', 'PagesController@addnews')->middleware('admin');

Route::get('/demo', 'PagesController@demo');

// Route::resource('/create', 'UsersController');

Route::delete('PagesController/{id}', 'PagesController@destroy');

Route::post('/addnewuser', 'UsersController@store')->name('addnewuser')->middleware('admin');

Route::get('/addnewuser', 'PagesController@addnewuser')->middleware('admin')->middleware('admin');

// Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
//     return "this page requires that you be logged in and an Admin";
// }]);

// Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UsersController@edit']);
Route::put('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UsersController@update']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('search', 'SearchController@index');

