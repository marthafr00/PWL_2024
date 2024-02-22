<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Nama: NADILLA AMANDA MARTHA AFRHISSA, NIM: 2141762050';
    }

    public function articles($articleId){
        return " Artikel ke-: ".$articleId;
    }
}
