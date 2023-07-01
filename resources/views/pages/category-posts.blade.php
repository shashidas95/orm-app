@extends('layouts.app')
@section('content')

<h1>Posts in {{ $category->name }} category</h1>

<ul>
    @foreach($posts as $post)
        <li>{{ $post->title }}</li>
        <!-- Display other post details as needed -->
    @endforeach
</ul>
@endsection
