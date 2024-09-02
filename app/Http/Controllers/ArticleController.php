<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{    
    public function articles($Id){
    return 'Halaman artikel ini dengan id:' .$Id;
}
}

