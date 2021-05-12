<?php
namespace App\Http\Controllers;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\Testimonials;
use Illuminate\Support\Facades\View;

class AboutController extends Controller {

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
    // Create Contact Form
    public function about(Request $request) {
      $testimony = Testimonials::all();
      return view('blog.about',compact('testimony'));
    }
}
