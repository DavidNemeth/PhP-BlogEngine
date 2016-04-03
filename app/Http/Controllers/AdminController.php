<?php

namespace App\Http\Controllers;
use App\Post;

class AdminController extends Controller
{
    public function getIndex()
    {
        $posts = Post::orderBy('created_at','dsec')->take(3)->get();
        return view('admin.index', ['posts' => $posts]);
    }
}