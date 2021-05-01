<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AboutController extends Controller {

    // Create Contact Form
    public function about(Request $request) {
      return view('blog.about');
    }
}