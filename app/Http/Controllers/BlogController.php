<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use App\Models\Testimonials;

use App\Models\Category;
use Illuminate\Support\Facades\View;

class BlogController extends Controller
{

    public function __construct()
    {
        View::share('about_image', setting::where('name','about_image')->first());
        View::share('about_text', setting::where('name','about_text')->first());
        View::share('email', setting::where('name','email')->first());
        View::share('mobile', setting::where('name','mobile')->first());
        View::share('twitter', setting::where('name','twitter')->first());
        View::share('facebook', setting::where('name','facebook')->first());
        View::share('linkedin', setting::where('name','linkedin')->first());
        View::share('medium', setting::where('name','medium')->first());
        View::share('address', setting::where('name','address')->first());

    }
    protected $limit=6;
    //TODO--simple pagination not working properly
    // dont use lazy loading
    // display most recent post first
    public function index(){

        $testimony = Testimonials::all();
        $posts =Post::with('author','tags','category')
        ->latestFirst()
        ->published()
        ->filter(request()->only(['term', 'year', 'month']))
        ->simplePaginate($this->limit);
        return view("blog.index",compact('posts','testimony'));

    }

    public function category(Category $category){
        $testimony = Testimonials::all();
        $categoryName = $category->title;
        $posts =$category->posts()
                        ->with('author','tags')
                        ->latestFirst()
                        ->published()
                        ->simplePaginate($this->limit);

        return view("blog.index",compact('posts','categoryName','testimony'));
    }
    public function tag(Tag $tag)
    {
        $tagName = $tag->title;
        $testimony = Testimonials::all();
        $posts = $tag->posts()
                          ->with('author', 'category')
                          ->latestFirst()
                          ->published()
                          ->simplePaginate($this->limit);

         return view("blog.index", compact('posts', 'tagName','testimony'));
    }

    public function author(User $author)
    {
        $authorName = $author->name;
        $testimony = Testimonials::all();
        $posts =$author->posts()
                        ->with('category','tags')
                        ->latestFirst()
                        ->published()
                        ->simplePaginate($this->limit);

        return view("blog.index",compact('posts','authorName','testimony'));
    }

    public function show(Post $post)
    {
        //  prevent id of non published urls being put in url
        $testimony = Testimonials::all();
        $post->increment('view_count');
        return view("blog.show", compact('post','testimony'));
    }

    public function contact(Post $post)
    {
        $testimony = Testimonials::all();
        return view("blog.contact", compact('post','testimony'));
    }
}
