<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        // generate 3 users
        DB::table('users')->insert([
            [
                'name'=>"John Doe",
                'email'=> "johndoe@test.com",
                'password'=> bcrypt('secret')
            ],
            [
                'name'=>"John Doe",
                'email'=> "johndoe2@test.com",
                'password'=> bcrypt('secret')
            ],
            [
                'name'=>"John Doe",
                'email'=> "johndoe3@test.com",
                'password'=> bcrypt('secret')
            ]
        ]);
    }
}
