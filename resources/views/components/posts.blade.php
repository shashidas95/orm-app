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
                    <h2 class="post-title">{{ $post->slug }}</h2>
                    <p class="post-subtitle">{{ $post->description }}</p>
                    <p class="post-subtitle">{{ $post->excerpt }}</p>
                    <p class="post-subtitle">{{ $post->min_to_read }}</p>

                    <p class="post-meta">
                        Posted by
                        @foreach ($users as $user)
                            @if ($user->id == $post->user_id)
                                <p>{{ $user->name }}</p>
                            @endif
                        @endforeach
                        on September 24, 2023
                    </p>
                </div>
            @endforeach

            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older
                    Posts →</a></div>
        </div>
    </div>
</div>
