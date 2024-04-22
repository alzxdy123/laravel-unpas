

@extends('dashboard.dashboardMain')

@section('content')
<article class="mb-5 mt-5">
    <h2>{{ $post->title }}</h2>
    <div class="mt-2 mb-5">
        <a href="/dashboard/posts" class="badge bg-success text-decoration-none">back to all my post</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning text-decoration-none">Edit</a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
            @csrf
            @method('delete')
            <button class="border-0 btn btn-danger" onclick="return confirm('are you sure')">Delete</button>
          </form>
    </div>
    <img src="https://picsum.photos/1200/400" class="card-img-top" alt="...">
    <p>{!! $post->body !!}</p>

    <a href="/Posts">Back to Post</a>
</article>
@endsection