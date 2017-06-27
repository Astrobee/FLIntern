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

Route::get('/', function () {
    return view('main.index');
})->name('index');


Route::get('/notfound', function(){
	return view('errors.404');
});


// system auth routes
Auth::routes();

// User Defined routes for users
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/register','RegistrationController@register')->name('user.register');
Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');

Route::get('/user/info','UserController@show')->name('user.info');
Route::post('/user/store','UserController@update')->name('user.update');


Route::get('/lessons', 'PageController@lessons')->name('lessons');
Route::get('/team', 'PageController@team')->name('team');

Route::get('/quotes', 'QuotesController@index')->name('quotes');
Route::post('/quotes/store', 'QuotesController@store')->name('quotes.store');
Route::post('/quotes/update', 'QuotesController@update')->name('quotes.update');



Route::get('/poems', 'PoemsController@index')->name('poems');
Route::get('/poems/{poem}', 'PoemsController@singles');
Route::post('/poems/store', 'PoemsController@store')->name('poems.store');
Route::post('/poems/update', 'PoemsController@update')->name('poems.update');

Route::get('/poems/tags/{tag}','TagsController@index')->name('poem.tag');

Route::post('/comment/store','CommentsController@store')->name('comment.store');

Route::post('/profile','PhotoController@store')->name('profile');
Route::get('/apps','PageController@apps')->name('apps');

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
