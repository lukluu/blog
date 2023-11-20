<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class PostLatihan
{
    static $blog_posts = [
        [
            "judul" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Fauzan",
            "body" => "Lorem ipsum dolor s it amet consectetur adipisicing elit"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
