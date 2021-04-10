<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Post;

class BlogController extends Controller
{
    protected $limit=3;
    //TODO--simple pagination not working properly
    // dont use lazy loading
    // display most recent post first
    public function index(){
        $posts =Post::with('author')
        ->latestFirst()
        ->published()
        ->simplePaginate($this->limit);
        return view("blog.index",compact('posts'));
    }

    public function show(Post $post)
    {
        // // prevent id of non published urls being put in url
        // $post=Post::published()->findOrFail($id);
        return view("blog.show", compact('post'));
    }
}
