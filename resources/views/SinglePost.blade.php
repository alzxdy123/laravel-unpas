@extends('layouts.main')

@section('content')

<article class="mb-5">
    <h2>{{ $post->title }}</h2>
    <small>In <a href="/Posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a> By <a href="/Posts?user={{ $post->user->slugid }}">{{ $post->user->name }}</a></small>
    <img src="https://picsum.photos/1200/400" class="card-img-top" alt="...">
    <p>{!! $post->body !!}</p>

    <a href="/Posts">Back</a>
</article>
    
@endsection