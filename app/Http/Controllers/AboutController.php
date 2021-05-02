<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Testimonials;

class AboutController extends Controller {

    // Create Contact Form
    public function about(Request $request) {
      $testimony = Testimonials::all();
      return view('blog.about',compact('testimony'));
    }
}