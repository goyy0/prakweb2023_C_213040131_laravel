@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>
    
    <p>by. Yogi Saputra in {{ $post->category->name }}</p>

    <a href="/posts">Back to Posts</a>
@endsection