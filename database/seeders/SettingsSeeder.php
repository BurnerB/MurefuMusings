<?php
namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Faker\Factory;
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
        $faker = Factory::create();
        $image = 'Post_Image_' . rand(1, 5) . '.jpg';
        DB::table('settings')->delete();

        if (env('APP_ENV') === 'local')
        {
            DB::table('settings')->insert([
                [
                    'about_text' => $faker->sentence(rand(8, 12)),
                    'mobile' => '+254 712345678',
                    'email' => 'ianachamwangi@gmail.com',
                    'address' => 'https://www.phpmyadmin.net/',
                    'facebook' => 'https://www.phpmyadmin.net/',
                    'twitter' => 'https://www.phpmyadmin.net/',
                    'medium' => 'https://www.phpmyadmin.net/',
                    'linkedin' => 'https://www.phpmyadmin.net/',
                    'about_image' => rand(0, 1) == 1 ? $image : NULL,
                ]
                
            ]);
        }
        else
        {
            DB::table('settings')->insert([
                [
                    'about_text' => $faker->sentence(rand(8, 12)),
                    'mobile' => '+254 712345678',
                    'email' => 'ianachamwangi@gmail.com',
                    'address' => 'https://www.phpmyadmin.net/',
                    'facebook' => 'https://www.phpmyadmin.net/',
                    'twitter' => 'https://www.phpmyadmin.net/',
                    'medium' => 'https://www.phpmyadmin.net/',
                    'linkedin' => 'https://www.phpmyadmin.net/',
                    'about_image' => rand(0, 1) == 1 ? $image : NULL,
                ]
                
            ]);
}
    }
}