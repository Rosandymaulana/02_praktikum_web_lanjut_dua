<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return "Selamat Datang";
// });


Route::get('/', [HomeController::class, 'hello']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// Route::get('/about', function () {
//     return "
//     NIM     : 2041720120
//     Nama    : Maulana Rosandy
//     Kelas   : TI - 2B";
// });

// Route::get('/articles/{id}', function ($id) {
//     return "Ini merupakan halaman artikel dengan id " . $id;
// });
