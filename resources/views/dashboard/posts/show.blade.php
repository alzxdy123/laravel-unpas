

@extends('dashboard.dashboardMain')

@section('content')
<article class="mb-5 mt-5">
    <h2>{{ $post->title }}</h2>
    <div class="mt-2 mb-5">
        <a href="/dashboard/posts" class="badge bg-success text-decoration-none">back to all my post</a>
        <a href="/dashboard/posts" class="badge bg-warning text-decoration-none">Edit</a>
        <a href="/dashboard/posts" class="badge bg-danger text-decoration-none">Delete</a>
    </div>
    <img src="https://picsum.photos/1200/400" class="card-img-top" alt="...">
    <p>{!! $post->body !!}</p>

    <a href="/Posts">Back</a>
</article>
@endsection