<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\View;
use Mail;
use App\Models\Testimonials;

class ContactUsFormController extends Controller {

    // Create Contact Form
    public function createForm(Request $request) {
        $testimony = Testimonials::all();
      return view('blog.contact',compact('testimony'));
    }

}
