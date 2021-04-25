<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Post;
use App\Models\User;
use App\Models\Tag;

use App\Models\Category;

class BlogController extends Controller
{
    protected $limit=5;
    //TODO--simple pagination not working properly
    // dont use lazy loading
    // display most recent post first
    public function index(){
        $posts =Post::with('author','tags','category')
        ->latestFirst()
        ->published()
        ->filter(request()->only(['term', 'year', 'month']))
        ->simplePaginate($this->limit);

        return view("blog.index",compact('posts'));
    }

    public function category(Category $category){
        
        $categoryName = $category->title;
        
        $posts =$category->posts()
                        ->with('author','tags')
                        ->latestFirst()
                        ->published()
                        ->simplePaginate($this->limit);

        return view("blog.index",compact('posts','categoryName'));
    }
    public function tag(Tag $tag)
    {
        $tagName = $tag->title;

        $posts = $tag->posts()
                          ->with('author', 'category')
                          ->latestFirst()
                          ->published()
                          ->simplePaginate($this->limit);

         return view("blog.index", compact('posts', 'tagName'));
    }

    public function author(User $author)
    {
        $authorName = $author->name;
        
        $posts =$author->posts()
                        ->with('category','tags')
                        ->latestFirst()
                        ->published()
                        ->simplePaginate($this->limit);

        return view("blog.index",compact('posts','authorName'));
    }

    public function show(Post $post)
    {
        //  prevent id of non published urls being put in url

        $post->increment('view_count');
        return view("blog.show", compact('post'));
    }
}
