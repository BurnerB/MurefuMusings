<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        $image = new Setting();
        $image->name = 'about_image';
        $image->value = "";
        $image->save();

        $about_text = new Setting();
        $about_text->name = 'about_text';
        $about_text->value = "";
        $about_text->save();

        $mobile = new Setting();
        $mobile->name = 'mobile';
        $mobile->value = "";
        $mobile->save();

        $email = new Setting();
        $email->name = 'email';
        $email->value = "";
        $email->save();

        $address = new Setting();
        $address->name = 'address';
        $address->value = "";
        $address->save();

        $twitter = new Setting();
        $twitter->name = 'twitter';
        $twitter->value = "";
        $twitter->save();

        $medium = new Setting();
        $medium->name = 'medium';
        $medium->value = "";
        $medium->save();

        $linkedin = new Setting();
        $linkedin->name = 'linkedin';
        $linkedin->value = "";
        $linkedin->save();

        $facebook = new Setting();
        $facebook->name = 'facebook';
        $facebook->value = "";
        $facebook->save();



    }
}
