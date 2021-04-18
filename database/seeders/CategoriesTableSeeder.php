<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        
        DB::table('categories')->insert([
            [
                'title'=>'Uncategorised',
                'slug'=>'uncategorised'
            ],
            [

                'title'=>'Web Programming',
                'slug'=>'Web Programming'
            ],
            [

                'title'=>'IOT',
                'slug'=>'IOT'
            ],
            [

                'title'=>'Networking',
                'slug'=>'Networking'
            ],
            [

                'title'=>'Automation',
                'slug'=>'Automation'
            ],
            [

                'title'=>'Creeping',
                'slug'=>'Creeping'
            ],
        ]);
        // update the posts data
        // for($post_id=1; $post_id<=10; $post_id++)
        // {
        //     $category_id = rand(1,6);
        //    DB::table('posts')
        //         ->where('id',$post_id)
        //         ->update(['category_id'=> $category_id]);
        // }
    }
}
