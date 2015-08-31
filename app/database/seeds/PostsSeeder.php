<?php 

use Faker\Factory as Faker;

class PostsSeeder extends Seeder
{
	public function run()
	{
		
		// $faker = Faker::create();
		// for ($i = 1; $i<100; $i++){
		// 	$post = new Post();
		// 	$post->title = $faker->CatchPhrase;
		// 	$post->body = $faker->bs . ' and International ' . $faker->bs;
		// 	$post->user_id = User::all()->random(1)->id;
		// 	$post->save();
		// }

		$post1 = new Post();
		$post1->title = 'Inaugural Post for my personal website';
		$post1->body = 'This post is the official launch of my personal website.  The website is a product of the cumulative lessons learned at CodeUp.  The work here will be an ongoing effort to augment the website features, as well as update interested parties of my development and progress.  It is hoped that this will become a helpful repository of information for others.  For those reading this,  I hope you enjoy the site.';
		$post1->user_id = DB::table('users')->first()->id;
		$post1->save();

		
		// $postX = new Post();
		// $postX->title = 'Template;
		// $postX->body = 'Content...'
		// $postX->user_id = ''
		// $postX->save();

	}
}

?>