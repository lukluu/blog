<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "Home",
            "active" => "home",
            "text" => "Selamat datang di Blog Kelompok 3",
            "gambar" => Storage::url('1.jpg')
        ]);
    }
}