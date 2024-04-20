@extends('layouts.main')

@section('content')

<article class="mb-5">
    <h2>{{ $post->title }}</h2>
    <small>In <a href="/Posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a> By <a href="/Posts?user={{ $post->user->slugid }}">{{ $post->user->name }}</a></small>

    <p>{!! $post->body !!}</p>

    <a href="/Posts">Back</a>
</article>
    
@endsection