<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return view('authors', [
            "title" => "All Author",
            "active" => "author",
            "authors" => \App\Models\User::all()
        ]);
    }
}