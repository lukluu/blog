<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saya;

class SayaController extends Controller
{
    public function index()
    {
        return view('view_saya', [
            "title" => "Tentang saya",
            "active" => "saya",
            "more" => Saya::all()
        ]);
    }
}
