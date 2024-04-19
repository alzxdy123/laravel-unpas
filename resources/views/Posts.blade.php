{{-- @dd($posts) --}}

@extends('layouts.main')

@section('content')

@if ($posts->count())
<a href="Posts/{{ $posts[0]->slug }}" class="text-decoration-none">
  <div class="card mb-5"> 
      <img src="https://picsum.photos/1200/400" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title text-dark text-decoration-none">{{ $posts[0]->title }}</h5>
        <small>In <a href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> By <a href="/author/{{ $posts[0]->user->id }}">{{ $posts[0]->user->name }} </a> {{ $posts[0]->created_at->diffForHumans() }}</small>
        <p class="card-text">{{ $posts[0]->exerpt }}.</p>
        
        <a href="Posts/{{ $posts[0]->slug }}">Read more</a>
      </div>
    </div> 
  </a>

  <div class="container">
    <div class="row">
      @foreach ($posts as $post)
      <div class="col-md-3 mb-4">
          <div class="card" style="width: 18rem;">
            <img src="https://picsum.photos/500/500" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <small>In <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> By <a href="/author/{{ $post->user->id }}">{{ $post->user->name }}</a>{{ $posts[0]->created_at->diffForHumans() }}</small>
              <p class="card-text">{{ $post->exerpt }}</p>
              <a href="Posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        @endforeach
    </div>
  </div>

@else
    <p>No Post FOund</p>
@endif



    <h1 class="mb-5">{{ $title }}</h1>

    @foreach ($posts->skip(1) as $post)
        <article class="mb-5">
            <h2>{{ $post->title }}</h2>
            <small>In <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> By <a href="/author/{{ $post->user->id }}">{{ $post->user->name }}</a></small>

            <p>{{ $post->exerpt }}</p>

            <a href="Posts/{{ $post->slug }}">Read more</a>
        </article>
    @endforeach
@endsection