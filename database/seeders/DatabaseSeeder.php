<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $post1 = Post::create([
            'title' => 'First Post',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
		]);

		$post2 = Post::create([
            'title' => 'Second Post',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
		]);

		Comment::factory(3)->create([
			'post_id' => $post1->id,
            'comment' => 'Lorem ipsum dolor sit amet',
		]);
		Comment::factory(3)->create([
			'post_id' => $post2->id,
            'comment' => 'Lorem ipsum dolor sit amet',
		]);


    }
}
