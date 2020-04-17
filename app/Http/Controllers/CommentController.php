<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use DB;

class CommentController extends Controller
{
    public function index()
    {
        $users = User::pluck('email')->toArray();
        $comments = Comment::whereNotIn('email', $users)->get();

        return view('comments.comment', [
            'comments' => $comments
        ]);
    }

    public function detail($id)
    {
        $comment = Comment::with('post')->find($id); 

        return view('comments.comment-detail', [
            'comment' => $comment
        ]);
    }

    public function create()
    {
        return view('comments.comment-create');
    }

    public function store(Request $req)
    {
        $payload = $req->except('_token');

        $this->validate($req, [
            'website' => 'required|string|max:255',
            'comment' => 'required|min:3|max:1000'
        ]);

        $payload['user_id'] = auth()->user()->id;
        $comment = Comment::create($payload);

        return redirect()->route('comments');
    }

    public function edit($id, Request $req)
    {
        $comment = Comment::find($id);

        return view('comments.comment-edit', [
            'comment' => $comment
        ]);
    }

    public function update($id, Request $req)
    {
        $payload = $req->except('_token');

        $this->validate($req, [
            'website' => 'string|required|max:255',
            'comment' => 'required|min:3|max:1000'
        ]);

        $payload['user_id'] = auth()->user()->id;
        $comment = Comment::findOrFail($id);
        $comment->fill($payload);
        $comment->save();

        return redirect()->route('comments');
    }

    public function delete($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect()->route('comments');
    }
}
