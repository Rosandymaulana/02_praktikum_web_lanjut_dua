<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hello()
    {
        return 'Selamat Datang';
    }
    public function about()
    {
        return "
         NIM     : 2041720120
         Nama    : Maulana Rosandy
         Kelas   : TI - 2B";
    }
    public function articles($id)
    {
        return "Ini merupakan halaman artikel dengan id " . $id;
    }
}
