@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div>{{Auth::user()->name}}</div>
        <h1>Blog Name</h1>
        <p class='create'>[<a href='/posts/create'>create</a>]</p>
        <div class = 'posts'>
            @foreach ($posts as $post)
            <div class='post'>
                <h2>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <h3>
                    <a href="">{{ $post->category->name }}</a>
                </h3>
                <h4>
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                </h4>
                <p class='body'>{{ $post->body}}</p>
            </div>
            @endforeach
            
           
           
        </div>
        
    </body>
</html>
@endsection