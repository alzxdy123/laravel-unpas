@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center mb-5">Please Sign in</h1>
            <form action="/register" method="post">
              @csrf
              <div class="form-floating">
                <input value="{{ old('name') }}" required name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name">
                <label for="name">name</label>
                @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input value="{{ old('username') }}" required name="username" type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username">
                <label for="username">username</label>
                @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input value="{{ old('email') }}" required name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
                <label for="email">Email address</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input required name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                <label for="password">Password</label>
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              
              <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Sign in</button>
            </form>

            <small class="d-block text-center mt-4">Already register? <a href="/login">Login</a></small>
          </main>
    </div>
</div>
@endsection