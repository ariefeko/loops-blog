<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('posts.comments')->get(); 

        return view('users.user', [
            'users' => $users
        ]);
    }

    public function detail($id)
    {
        $user = User::with('posts.comments')->find($id);
        
        return view('users.user-detail', [
            'user' => $user
        ]);
    }
}
