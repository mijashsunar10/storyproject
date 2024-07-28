<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $categories = [

                ['category'=>'Science Fiction','slug'=>'science-fiction', 'description'=>'A genre of speculative fiction.'],
                ['category' => 'Comedy', 'slug' => 'comedy', 'description' => 'A genre of film that emphasizes humor.'],
                ['category' => 'Horror', 'slug' => 'horror', 'description' => 'A genre intended to scare.'],
                ['category' => 'Love', 'slug' => 'love', 'description' => 'A genre centered on romantic love.'],
                ['category' => 'Fantasy', 'slug' => 'fantasy', 'description' => 'A genre of speculative fiction.'],
                ['category' => 'Mystery', 'slug' => 'mystery', 'description' => 'A genre involving solving a mystery.'],
                ['category' => 'Mythology', 'slug' => 'mythology', 'description' => 'A collection of myths.'],
                ['category' => 'Legend', 'slug' => 'legend', 'description' => 'A genre involving legendary tales.'],
                ['category' => 'Fairy Tale', 'slug' => 'fairy-tale', 'description' => 'A genre involving magical stories.'],
                ['category' => 'Historical', 'slug' => 'historical', 'description' => 'A genre involving historical events.'],
                ['category' => 'Drama', 'slug' => 'drama', 'description' => 'A genre involving emotional narratives.'],
                ['category' => 'Fable', 'slug' => 'fable', 'description' => 'A genre involving moral tales.'],
            ];
    
            foreach ($categories as $category) {
                Category::create($category);
            }
        }
    }
}
