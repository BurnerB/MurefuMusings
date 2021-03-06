<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset users table
        // DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->delete();

        if (env('APP_ENV') === 'local')
        {
            $faker = \Faker\Factory::create();
            DB::table('users')->insert([
            [
                'name'=>'John Doe',
                'slug'=>'John-Doe',
                'email'=> 'johndoe@test.com',
                'password'=> bcrypt('secret'),
                'bio'=>$faker->text(rand(250,300))
            ],
            [
                'name'=>'Jane Doe',
                'slug'=>'Jane-Doe',
                'email'=> 'johndoe2@test.com',
                'password'=> bcrypt('secret'),
                'bio'=>$faker->text(rand(250,300))
            ],
            [
                'name'=>'Bigman Bazu',
                'slug'=>'Bigman-Bazu',
                'email'=> 'johndoe3@test.com',
                'password'=> bcrypt('secret'),
                'bio'=>$faker->text(rand(250,300))
            ]
        ]);
        } else
        {
            DB::table('users')->insert([
                [
                    'name' => "Freddy Murefu",
                    'slug' => 'admin',
                    'email' => "murefuwriter20@gmail.com",
                    'password' => bcrypt('Password'),
                    'bio' => "I'm an Administrator"
                ]
            ]);
        }

        // generate 3 users
        
    }
}
