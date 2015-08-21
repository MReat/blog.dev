<?php 

use Faker\Factory as Faker;

class PostsSeeder extends Seeder
{
	public function run()
	{
		// delete all existing posts
		// Post::truncate();

		$faker = Faker::create();
		for ($i = 1; $i<100; $i++){
			$post = new Post();
			$post->title = $faker->CatchPhrase;
			$post->body = $faker->bs . ' and International ' . $faker->bs;
			$post->save();
		}


		// $post->title = 'My First Post';
		// $post->body = 'This is a bunch of words for the seeder';
		// $post->save();
		
		// $post1 = new Post();
		// $post1->title = 'My Next Post';
		// $post1->body = 'This is a bunch of words for the seeder. This is a bunch of words for the seeder. This is a bunch of words for the seeder. This is a bunch of words for the seeder. This is a bunch of words for the seeder. This is a bunch of words for the seeder. This is a bunch of words for the seeder. This is a bunch of words for the seeder. This is a bunch of words for the seeder. This is a bunch of words for the seeder. This is a bunch of words for the seeder. ';
		// $post1->save();

		// $post2 = new Post();
		// $post2->title = 'My Next Post';
		// $post2->body = 'This is a bunch of words for the seeder. This is a bunch of words for the seeder. This is a bunch of words for the seeder. This is a bunch of words for the seeder. This is a bunch of words for the seeder. This is a bunch of words for the seeder. This is a bunch of words for the seeder. This is a bunch of words for the seeder. This is a bunch of words for the seeder. This is a bunch of words for the seeder. This is a bunch of words for the seeder. ';
		// $post2->save();


	}
}

?>