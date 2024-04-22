{{-- @dd($post) --}}

@extends('dashboard.dashboardMain')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Post</h1>
</div>

<div class="row justify-content-center">
    <div class="table-responsive small col-md-10">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a>

        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col" style="width: 200px;">Action</th>
              {{-- <th scope="col">Exerpt</th>
              <th scope="col">Body</th> --}}
            </tr>
          </thead>
          <tbody>
              @foreach ($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                {{-- <th>{{ $post->exerpt }}</th>
                <th>{{ $post->body }}</th> --}}
                <td>
                    <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info text-decoration-none">Details</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning text-decoration-none">Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                      @csrf
                      @method('delete')
                      <button class="border-0 badge bg-danger" onclick="return confirm('are you sure')">Delete</button>
                    </form>
                </th>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</div>
@endsection