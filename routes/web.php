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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/less', function () {
  $articles = DB::table('articles')->get();

  return view('less', ['articles' => $articles]);
});

Route::get('/more', function () {

    $articles = DB::table('articles')->get();

    return view('more', ['articles' => $articles]);
});
