<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Storydetails;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // $categories = Category::with('stories')->get();
        // return view('categories.index', compact('categories'));

        // CategoryController.php
 $categories = Category::with(['stories' => function ($query) {
        $query->take(4); // Adjust the number of stories to show per category
    }])->get();

    return view('categories.index', compact('categories'));
}

    

    public function show($id)
    {
        $category = Category::with('stories')->findOrFail($id);
        return view('categories.show', compact('category'));
    }

    public function story($id)
    {
        $story = StoryDetails::with('chapters')->findOrFail($id);
        return view('categories.story', compact('story'));
    }

    public function chapter($story_id, $chapter_id)
    {
        $story = StoryDetails::with('chapters')->findOrFail($story_id);
        $chapter = $story->chapters()->findOrFail($chapter_id);
        return view('categories.chapter', compact('story', 'chapter'));
    }
}
