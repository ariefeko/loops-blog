<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Validator;

class FrontController extends Controller
{
    public function index()
    {
        $posts = Post::with('user', 'comments')->get();

        return view('front', [
            'posts' => $posts
        ]);
    }

    public function detailArticle($id)
    {
        $post = Post::with('user', 'comments')->findOrFail($id);

        return view('article-detail', [
            'post' => $post
        ]);
    }

    public function storeComment(Request $req)
    {
        $payload = $req->only('post_id', 'name', 'email', 'website', 'comment');
        
        Validator::make($payload, [
            'name' => 'string|required|max:255',
            'email' => 'string|required|email|max:255',
            'website' => 'string|max:255',
            'comment' => 'required|min:3|max:1000'
        ])->validate();

        $comment = Comment::create($payload);

        return redirect()->route('detail-article', ['post_id' => $req->post_id]);
    }
}
