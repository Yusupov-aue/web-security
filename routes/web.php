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

Route::get('/auth','AuthController@auth');
Route::middleware('auth')->group(function(){
Route::get('/logout','AuthController@logout');
});



/*главные страниццы*/
Route::get('/search','ApiController@search');

Route::get('/about','ApiController@indexAction');

Route::get('/geo','ApiController@geoAction');

Route::get('/about','ApiController@aboutAction');

Route::get('/articles','ApiController@articlesAction');

Route::get('/confirm','ApiController@confirmAction');

Route::get('/login','ApiController@loginAction');

Route::get('/news','ApiController@newsAction');

Route::get('/question','ApiController@questionAction');


Route::get('/reg','ApiController@regAction');
Route::get('/registration','AuthController@reg');


Route::get('/welcome','ApiController@welcomeAction');

Route::get('/index','ApiController@indexAction');

Route::get('/getArticle','ApiController@getArticles');
