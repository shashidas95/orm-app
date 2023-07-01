@extends('layouts.app')
@section('content')
    <article class="mb-4">

        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">

                    <!-- Post preview-->
                    @foreach ($softDeletedPosts as $softDeletedPost)
                        <div class="post-preview">
                            <a href="post.html">
                                <h1 class="post-category">{{ $softDeletedPost->title }}</h1>
                            </a>
                            <p>{{ $softDeletedPost->id }}</p>
                            {{-- @foreach ($categories as $category)
                        @if ($category->id == $post->category_id)
                            <p>{{ $category->name }}</p>
                        @endif
                    @endforeach --}}

                            <p class="post-title">{{ $softDeletedPost->slug }}</p>
                            <p>{{ $softDeletedPost->description }}</p>
                            <p>{{ $softDeletedPost->excerpt }}</p>
                            <p>{{ $softDeletedPost->min_to_read }} mins to read</p>


                            <p class="post-meta">

                                {{-- @foreach ($users as $user)
                            @if ($user->id == $post->user_id)
                                <p> Posted by: {{ $user->name }}</p>
                            @endif
                        @endforeach --}}
                            <p>{{ $softDeletedPost->created_at }}</p>
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </article>
@endsection
