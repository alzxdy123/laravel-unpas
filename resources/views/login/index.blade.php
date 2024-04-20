@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
      @if (session('status'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if (session('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center mb-5">Please Log in</h1>
            <form action="/login" method="POST">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>

              <button class="btn btn-primary w-100 py-2" type="submit">Log in</button>
            </form>

            <small class="d-block text-center mt-4">Not register? <a href="/register">Register Now</a></small>
          </main>
    </div>
</div>
@endsection