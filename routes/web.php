<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
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
/* PERTEMUAN 1 - PRAKTIKUM 1 */
// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/world', function () {
//     return 'World';
// });

// Route::get('/about', function () {
//     return 'Nama Saya Zanuar Aldi Syahputra <br> NIM saya 2241760062';
// });

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// Route::get('/articles/{id}', function ($Id) {
//     return 'Halaman Artikel dengan ID '. $Id;
// });

// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama saya '.$name;
// });

/* PERTEMUAN 1 - PRAKTIKUM 2 */
Route::get('/hello', [WelcomeController::class,'hello']);

route::get('/index', [HomeController::class, "index"]);
route::get('/about', [AboutController::class, "about"]);
route::get('/articles/{id}', [ArticleController::class, "articles"]);

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

/*  PERTEMUAN 1 - PRAKTIKUM 3 */
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Aldi', 'occupation' => 'Astronaut']);
// });

Route::get('/greeting', [WelcomeController::class,'greeting']);

    