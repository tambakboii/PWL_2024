<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index(){
        return 'selamat datang';
    }

    public function about(){
        return 'NIM : 2241720190'. '<br>'. 'Nama: Athiyan aqil Muhammad';
    }

    public function articles($id){
        return "Halaman artikel dengan Id: $id";
    }
}
