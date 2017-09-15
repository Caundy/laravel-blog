<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        #validate input
        $this->validate($request, [
            'title' => 'required|min:2|max:50',
            'body' => 'required|min:10|max:500'
        ]);

        #create a new post using request data and save it to the database
        Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);
        #redirect to the homepage
        return redirect('/posts');
    }

}
