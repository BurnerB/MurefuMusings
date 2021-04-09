<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Post;

class BlogController extends Controller
{
    protected $limit=5;
    //TODO--simple pagination not working properly
    // dont use lazy loading
    // display most recent post first
    public function index(){
        $posts =Post::with('author')->latestFirst()->simplePaginate($this->limit);
        return view("blog.index",compact('posts'));
    }
}
