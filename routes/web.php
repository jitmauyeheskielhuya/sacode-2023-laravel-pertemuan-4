<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});


// Rout Dasar
Route::get('/welcome', function () {
  return "Selamat Datang";
});

Route::get('/beranda/news', function () {
  return "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi veritatis, inventore corporis quisquam officia esse molestias earum aperiam illum voluptatum, voluptates natus cupiditate accusantium quibusdam qui atque id consequatur debitis? Vel, officiis deserunt facere adipisci, temporibus, corrupti id fugit corporis harum ducimus numquam vitae maiores cumque. Dignissimos quisquam veritatis eos.";
});

// Route dengan View
Route::get('/berita', function () {
  return view('user.berita.index');
});

Route::get('/berita/detail', function () {
  return view('user.berita.show');
});

// Rout dengan perfix
Route::prefix('admin')->group(function () {

  // dashboard
  Route::get('/dashboard', function () {
    return view('admin.dashboard');
  });


  // news
  Route::get('/news', function () {
    return view('admin.news.index');
  });
  // news create
  Route::get('/news/create', function () {
    return view('admin.news.create');
  });
  // news edit
  Route::get('/news/edit', function () {
    return view('admin.news.edit');
  });
  // news show
  Route::get('/news/show', function () {
    return view('admin.news.show');
  });


  // reports
  Route::get('/reports', function () {
    return view('admin.reports.index');
  });

  // users
  Route::get('/users', function () {
    return view('admin.users.index');
  });

  // setting
  Route::get('/setting', function () {
    return view('admin.setting.index');
  });
});
