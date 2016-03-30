<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function getBlogIndex()
    {
        //TODO: posts and paginate
        
        return view('frontend.blog.index');
    }
    
    public function getSinglePost($post_id, $end = 'frontend')
    {
        //TODO single post fetch
        
        return view($end . ".blog.single");
    }
}