<?php
namespace App\Http\Controllers;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\Testimonials;
use Illuminate\Support\Facades\View;

class AboutController extends Controller {

    // Create Contact Form
    public function about(Request $request) {
      $testimony = Testimonials::all();
      return view('blog.about',compact('testimony'));
    }
}
