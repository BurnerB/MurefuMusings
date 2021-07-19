<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class MiscController extends BackendController
        
{
    protected $uploadPath;
    public function __construct()
     {
         parent::__construct();
         $this->uploadPath = public_path('backend');
     }

    public function index(){
        return view("backend.settings.settings")->with('settings',Setting::first());
    }

    private function removeImage($image)
    {
        if ( ! empty($image) )
        {
            $imagePath     = $this->uploadPath . '/' . $image;
            $ext           = substr(strrchr($image, '.'), 1);

            if ( file_exists($imagePath) ) unlink($imagePath);
        }
    }

    public function update(Requests\SettingsUpdateRequest $request)
    {
        $settings = Setting::first();
        $oldImage = $settings->about_image;

        
        $data= $this->handleRequest($request);
        
        $settings->update($data);
        // dd($settings->mobile);
        if ($oldImage !== $settings->about_image) {
            $this->removeImage($oldImage);
        }
        

        return redirect()->route('backend.misc.index',compact('settings'))->with("message", "Settings updated successfully!");
    }

    public function handleRequest($request)
    {
        
        $data = $request->all();
        $settings = Setting::first();

        if($request->hasFile('about_image')){
            $image= $request->file('about_image');
            $fileName = $image->getClientOriginalName();
            $destination = $this->uploadPath;
            $image->move($destination,$fileName);

            $data['about_image']=$fileName;
            
            
        }
        return $data;
    }

}
