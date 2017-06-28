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
//Homepage route
Route::get('/', function () {
    return view('main.index');
})->name('index');



// system auth routes
Auth::routes();


//Developer's routes
Route::get('/developer/about', 'PageController@author')->name('author');
Route::post('/developer/mail_me','VisitorController@contact_me')->name('contact_me');

// User Defined routes for user registrations
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/register','RegistrationController@register')->name('user.register');
Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');


//routes for users
Route::get('/user/info','UserController@show')->name('user.info');
Route::post('/user/store','UserController@update')->name('user.update');
Route::post('/profile','PhotoController@store')->name('profile'); //profile picture upload route

//Page controlling routes
Route::get('/lessons', 'PageController@lessons')->name('lessons');
Route::get('/team', 'PageController@team')->name('team');
Route::get('/apps','PageController@apps')->name('apps');


//quotes routes
Route::get('/quotes', 'QuotesController@index')->name('quotes');
Route::post('/quotes/store', 'QuotesController@store')->name('quotes.store');


//poems routes
Route::get('/poems', 'PoemsController@index')->name('poems');
Route::get('/poems/{poem}', 'PoemsController@singles');
Route::post('/poems/store', 'PoemsController@store')->name('poems.store');
Route::post('/poems/update', 'PoemsController@update')->name('poems.update');
Route::get('/poems/tags/{tag}','TagsController@index')->name('poem.tag');


//comments routes
Route::post('/comment/store','CommentsController@store')->name('comment.store');


//Download routes
Route::get('/download/wordy','DownloadController@wordy')->name('wordy.get');
Route::get('/download/readme','DownloadController@readme')->name('readme.get');











// routes for controlling admin section 
Route::prefix('admin')->group(function()
{
	Route::get('/login-form','Auth\AdminLoginController@showLogin')->name('admin-form');
	Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.submit');
	Route::get('/', 'AdminController@index')->name('admin');
	Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

});
