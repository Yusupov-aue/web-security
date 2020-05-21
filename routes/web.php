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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', function () {
    return view('index');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/articles', function () {
    return view('articles');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/question', function () {
    return view('question');
});

Route::get('/geo', function () {
    return view('geo');
});

Route::get('/confirm', function () {
    return view('confirm');
});

Route::get('/reg', function () {
    return view('reg');
});


Route::get('/login', function () {
    return view('login');
});
