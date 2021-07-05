<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Models\Setting;
use Illuminate\Http\Request;
//use App\Models\Misc;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class MiscController extends BackendController
        
{
    public function __construct()
     {
         parent::__construct();
         $this->uploadPath = public_path('img');
     }

    public function index(Request $request)
    {
        //$misc = Misc::orderBy('Person')->paginate($this->limit);
        $about_image = setting::where('name', 'about_image')->first();
        $about_text = setting::where('name', 'about_text')->first();
        $mobile = setting::where('name', 'mobile')->first();
        $email = setting::where('name', 'email')->first();
        $address = setting::where('name', 'address')->first();
        $facebook = setting::where('name', 'facebook')->first();
        $twitter = setting::where('name', 'twitter')->first();
        $medium = setting::where('name', 'medium')->first();
        $linkedin = setting::where('name', 'linkedin')->first();

        
        return view("backend.settings.settings",compact('about_image','about_text','mobile','email','address','twitter','medium','linkedin','facebook'));
    }

    public function handleRequest($request)
    {
        $data = $request->all();
        if($request->hasFile('about_image')){
            $image= $request->file('about_image');
            $fileName = $image->getClientOriginalName();
            $destination = $this->uploadPath;
            $image->move($destination,$fileName);

            $data['about_image']=$fileName;
        }

        return $data;
    }
    

    public function store(Request $request)
    {
        if($request->hasFile('about_image'))
        {
            $about_image = setting::where('name','about_image')->first();

            $current_image = 'storage/files/settings/icon_avatar.png';

            //delete old banner first
            if(file_exists($current_image))
            {
                unlink($current_image);
            }
            $about_image->value = $request->about_image->store('public/backend/img');
            $about_image->save();
        }



            $email = setting::where('name','email')->first();
            $email->value = $request->email;
            $email->save();

            $mobile = setting::where('name','mobile')->first();
            $mobile->value = $request->mobile;
            $mobile->save();

            $medium = setting::where('name','medium')->first();
            $medium->value = $request->medium;
            $medium->save();

            $facebook = setting::where('name','facebook')->first();
            $facebook->value = $request->facebook;
            $facebook->save();

            $linkedin = setting::where('name','linkedin')->first();
            $linkedin->value = $request->linkedin;
            $linkedin->save();

            $twitter = setting::where('name','twitter')->first();
            $twitter->value = $request->twitter;
            $twitter->save();

            $address = setting::where('name','address')->first();
            $address->value = $request->address;
            $address->save();

            $about_text = setting::where('name','about_text')->first();
            $about_text->value = $request->about_text;
            $about_text->save();

            return redirect()->back()->with('success','setting updated successfully');
    }

    public function edit($id)
    {
        $testimony = Testimonials::findOrFail($id);

        return view("backend.testimony.edit", compact('testimony'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\TestimonyUpdateRequest $request, $id)
    {
        Testimonials::findOrFail($id)->update($request->all());

        return redirect("/backend/testimony")->with("message", "Testimony was updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $testimony = Testimonials::findOrFail($id);
        $testimony->delete();

        return redirect("/backend/testimony")->with("message", "Testimony was deleted successfully!");
    }
}
