@extends('layouts.main')

@section('content')
    <ul>
        @foreach ($categories as $category)
            <li><a href="/Posts?category={{ $category->slug }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>
@endsection