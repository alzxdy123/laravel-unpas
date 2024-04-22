@extends('dashboard.dashboardMain')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Post</h1>
    </div>

    <div class="col-lg-10">
        <form action="/dashboard/posts/{{ $post->slug }}" method="POST">
          @method('put')
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input value="{{ old('title', $post->title) }}" type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
              <div class="invalid-feedback">
                @error('title')
                    {{ $message }}
                @enderror
              </div>
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input value="{{ old('slug', $post->slug) }}" type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug">
              <div class="invalid-feedback">
                @error('slug')
                    {{ $message }}
                @enderror
              </div>
            </div>
            <div class="mb-3">
              <label for="category" class="form-label">Category</label>
              <select class="form-select" name="category_id">
                @foreach ($categories as $c)
                  @if (old('category_id',$post->category_id) == $c->id)
                    <option value="{{ $c->id }}" selected>{{ $c->name }}</option>
                  @else   
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <div class="text-danger">
                  @error('body')
                      {{ $message }}
                  @enderror
                </div>
                <input id="body" value="{{ old('body', $post->body) }}" type="hidden" name="body">
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">update post</button>
            <a href="/dashboard/posts" class="btn btn-danger">Back</a>
          </form>
    </div>

    <script>
        const title = document.getElementById('title');
        const slug = document.getElementById('slug');
        
        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        })

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection