<?php

use App\Post;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    // use the faker library to mock some data
	    $faker = Faker::create();

	    // create 30 articles
	    foreach(range(1, 100) as $index) {
	        Post::create([
	            'title' => $faker->sentence(5),
	            'content' => $faker->paragraph(6),
	            'published' => true
	        ]);
	    }
    }
}
