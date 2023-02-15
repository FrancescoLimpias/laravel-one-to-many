<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Post::factory()->count(50)->make()->each(function($post){

            $person = Person::inRandomOrder()->first();
            $post->person()->associate($person);
            $post->save();

        });
    }
}
