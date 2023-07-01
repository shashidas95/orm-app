<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            @foreach ($posts as $post)
                <div class="post-preview">
                    <a href="post.html">
                        <h1 class="post-category">{{ $post->title }}</h1>
                    </a>
                    @foreach ($categories as $category)
                        @if ($category->id == $post->category_id)
                            <p>{{ $category->name }}</p>
                        @endif
                    @endforeach

                    <p class="post-title">{{ $post->slug }}</p>
                    <p>{{ $post->description }}</p>
                    <p>{{ $post->excerpt }}</p>
                    <p>{{ $post->min_to_read }} mins to read</p>


                    <p class="post-meta">

                        @foreach ($users as $user)
                            @if ($user->id == $post->user_id)
                                <p> Posted by: {{ $user->name }}</p>
                            @endif
                        @endforeach
                    <p>{{ $post->created_at }}</p>
                    </p>
                </div>
            @endforeach

            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older
                    Posts →</a></div>
        </div>
    </div>
</div>
