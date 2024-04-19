@extends('layouts.main')

@section('content')

<article class="mb-5">
    <h2>{{ $post->title }}</h2>
    <small>In <a href="#">{{ $post->category->name }}</a> By <a href="#">{{ $post->user->name }}</a></small>

    <p>{!! $post->body !!}</p>

    <a href="/Posts">Back</a>
</article>
    
@endsection