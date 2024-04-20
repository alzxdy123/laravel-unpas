{{-- @dd($posts) --}}

@extends('layouts.main')

@section('content')

<h1 class="mb-5 text-center ">{{ $title }}</h1>

<div class="row justify-content-center "  >
  <div class="col-md-6">
    <form action="/Posts">
      <div class="input-group mb-3">
        @if (request('category'))
            <input type="text" hidden name="category" value="{{ request('category') }}">
        @endif
        @if (request('user'))
            <input type="text" hidden name="user" value="{{ request('user') }}">
        @endif
        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
        <button class="btn btn-danger" type="submit" id="button-addon2">Button</button>
      </div>
    </form>
  </div>
</div>

@if ($posts->count())
  <div class="card mb-5"> 
      <img src="https://picsum.photos/1200/400" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title text-dark text-decoration-none">{{ $posts[0]->title }}</h5>
        <small>In <a href="/Posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> By <a href="/Posts?user={{ $posts[0]->user->id }}">{{ $posts[0]->user->name }} </a> {{ $posts[0]->created_at->diffForHumans() }}</small>
        <p class="card-text">{{ $posts[0]->exerpt }}.</p>
        <a href="Posts/{{ $posts[0]->slug }}">Read more</a>
      </div>
    </div> 

  <div class="container">
    <div class="row">
      @foreach ($posts->skip(1) as $post)
      <div class="col-md-6 col-lg-3 mb-4">
          <div class="card" style="width: 18rem;">
            <img src="https://picsum.photos/500/500" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <small>In <a href="/Posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a> By <a href="/Posts?user={{ $post->user->id }}">{{ $post->user->name }}</a>{{ $posts[0]->created_at->diffForHumans() }}</small>
              <p class="card-text">{{ $post->exerpt }}</p>
              <a href="Posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        @endforeach
    </div>
  </div>

  {{ $posts->links() }}

@else
    <p>No Post FOund</p>
@endif



    

    {{-- @foreach ($posts->skip(1) as $post)
        <article class="mb-5">
            <h2>{{ $post->title }}</h2>
            <small>In <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> By <a href="/author/{{ $post->user->id }}">{{ $post->user->name }}</a></small>

            <p>{{ $post->exerpt }}</p>

            <a href="Posts/{{ $post->slug }}">Read more</a>
        </article>
    @endforeach--}}
@endsection 