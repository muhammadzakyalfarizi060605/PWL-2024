<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function show()
    {
        // logika untuk menampilkan profil user
        return view('profile');
    }
}