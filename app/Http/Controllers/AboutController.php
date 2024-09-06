<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return "
        Nama : Muhammad Zaky Alfarizi <br>
        NIM : 242107071010
        ";
    }
}