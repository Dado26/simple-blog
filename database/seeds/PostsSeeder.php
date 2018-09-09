<?php

use Illuminate\Database\Seeder;
use App\post;
use Faker\Factory;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        
        //clean table
        Post::truncate();
        
        //insert 40 posts
        for($i=0; $i<40; $i++){
            Post::create(['title'=> $faker->word, 'body'=>$faker->paragraph]);
        }
    }
}
