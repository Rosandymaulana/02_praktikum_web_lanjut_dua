<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return "
         NIM     : 2041720120
         Nama    : Maulana Rosandy
         Kelas   : TI - 2B";
    }
}
