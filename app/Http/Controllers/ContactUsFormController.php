<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\View;
use Mail;
use App\Models\Testimonials;

class ContactUsFormController extends Controller {

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
    public function createForm(Request $request) {
        $testimony = Testimonials::all();
      return view('blog.contact',compact('testimony'));
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
         ]);

        //  Store data in database
        Contact::create($request->all());

        //  Send mail to admin
        \Mail::send('blog.mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('ianachamwangi@gmail.com', 'Admin')->subject($request->get('subject'));
        });

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }

}
