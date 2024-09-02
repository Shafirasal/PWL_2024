<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat datang';
    }
    public function about(){
        return 'Nama: shafira salsabila, NIM: 2241760003';
    }
    public function articles($Id){
        return 'Halaman artikel dengan id' .$Id;
    }
}


