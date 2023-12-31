<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::with('posts')->get();
        $posts = Post::with('category')->latest()->get();
        $users = User::with('posts')->get();
        return view('pages.home', compact(['posts', 'users', 'categories']));
    }

    //Task -5
    public function postsData()
    {
        $posts = Post::with('category')
            ->get();
        return $posts;
    }

    //Task extra task
    public function usersData()
    {
        $users = Post::with('user')->get();
        return $users;
    }
    //Task 6
    public function countPost()
    {
        $posts = Post::with('category')
            ->where('category_id', 2)
            ->count();
        return $posts;
    }
    //Task 7
    public function deletePost($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
    }
    //Task 8

    public function softDeletedPosts()
    {
        $softDeletedPosts = Post::getSoftDeletedPosts();

        return view('pages.soft-deleted-posts', compact('softDeletedPosts'));
    }
    public function restoreDeleteData()
    {
        Post::withTrashed()->where('id', 50)->restore();
    }
    /**
     * Show the form for creating a new resource.
     */

    public function latestPosts()
    {
        $categories = Category::with(['posts' => function ($query) {
            $query->latest()->take(1);
        }])->get();
        // $posts = Post::with('category')->latest()->get();

        return view('latest-posts', compact('categories'));
        // return view('latest-posts', compact('posts'));
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
    }
}
