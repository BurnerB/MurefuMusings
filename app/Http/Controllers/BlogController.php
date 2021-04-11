<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Post;

use App\Models\Category;

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

    public function category(Category $category){
        
        $categoryName = $category->title;
        
        $posts =$category->posts()
                        ->with('author')
                        ->latestFirst()
                        ->published()
                        ->simplePaginate($this->limit);

        return view("blog.index",compact('posts','categoryName'));
    }

    public function show(Post $post)
    {
        //  prevent id of non published urls being put in url
        return view("blog.show", compact('post'));
    }
}
