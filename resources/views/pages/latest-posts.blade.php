@extends('layouts.app')
@section('content')
    <h1>Latest Posts</h1>

    @foreach ($categories as $category)
        <h2>{{ $category->name }}</h2>
        @if ($category->posts->count() > 0)
            <h3>{{ $category->posts->last()->title }}</h3>
            <p>{{ $category->posts->last()->description }}</p>
            <!-- Display other post details as needed -->
        @else
            <p>No posts available for this category.</p>
        @endif
    @endforeach
@endsection
