<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Validator;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();

        return view('posts.post', [
            'posts' => $posts
        ]);
    }

    public function detail($id)
    {
        $post = Post::with('user')->find($id); 

        return view('posts.post-detail', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('posts.post-create');
    }

    public function store(Request $req)
    {
        $payloads = $req->except('_token');

        $this->validate($req, [
            'title' => 'required|string|max:255',
            'content' => 'required|min:3|max:1000'
        ]);

        $payloads['user_id'] = auth()->user()->id;
        $post = Post::create($payloads);

        return redirect()->route('posts')->with('success','Post created successfully!');
    }

    public function edit($id, Request $req)
    {
        $post = Post::find($id);

        return view('posts.post-edit', [
            'post' => $post
        ]);
    }

    public function update($id, Request $req)
    {
        $payload = $req->except('_token');

        $this->validate($req, [
            'title' => 'string|required|max:255',
            'content' => 'required|min:3|max:1000'
        ]);

        $payload['user_id'] = auth()->user()->id;
        $post = Post::findOrFail($id);
        $post->fill($payload);
        $post->save();

        return redirect()->route('posts')->with('success','Post updated successfully!');
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts')->with('warning','Post has been deleted!');
    }
}
