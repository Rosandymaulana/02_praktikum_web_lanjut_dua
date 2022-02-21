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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return "Selamat Datang";
});

Route::get('/about', function () {
    return "
    NIM     : 2041720120
    Nama    : Maulana Rosandy
    Kelas   : TI - 2B";
});

Route::get('/articles/{id}', function ($id) {
    return "Ini merupakan halaman artikel dengan id " . $id;
});
