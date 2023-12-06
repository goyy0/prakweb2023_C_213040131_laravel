<?php

namespace App\Models;


class Post_
{
    private static $blog_posts = [
        [
            "title" => "Igoy Disiniii",
            "slug" => "Awas Igoy dimarii",
            "author" => "igoy",
            "body" => "Yah jadi begituu"
        ],
        [
            "title" => "Igoy Disiniii",
            "slug" => "Awas Igoy dimarii",
            "author" => "igoy",
            "body" => "Ada igoy jangan larii"
        ]
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
