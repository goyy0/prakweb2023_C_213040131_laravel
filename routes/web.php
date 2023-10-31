<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Yogi Saputra Manik",
        "email" => "yogisaputra9319@gmail.com",
        "image" => "yogi.jpg"
        
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Igoy Disiniii",
            "slug" => "Awas Igoy dimarii",
            "author" => "igoy",
            "body" => "Hanya Pria biasa yang akan menaklukan dunia"
        ],
        [
            "title" => "Igoy Disiniii",
            "slug" => "Awas Igoy dimarii",
            "author" => "igoy",
            "body" => "Ada igoy jangan larii"
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});