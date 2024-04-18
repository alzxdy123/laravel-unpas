{{-- @dd($posts) --}}

@extends('layouts.main')

@section('content')

    <h1 class="mb-5">{{ $title }}</h1>

    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>{{ $post->title }}</h2>
            <small>In <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> By <a href="/author/{{ $post->user->id }}">{{ $post->user->name }}</a></small>

            <p>{{ $post->exerpt }}</p>

            <a href="Posts/{{ $post->slug }}">Read more</a>
        </article>
    @endforeach
@endsection