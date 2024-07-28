<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\StoryDetails;
use App\Models\Chapter;
use Illuminate\Support\Facades\Auth;



class UserStoryController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $stories = StoryDetails::where('user_id', $user->id)->get();
        return view('user_stories.index', compact('stories'));
    }

    public function editStory($id)
    {
        $storydetails = StoryDetails::where('user_id', Auth::id())->findOrFail($id);
        return view('user_stories.edit_story', compact('storydetails'));
    }

    public function updateStory(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $storydetails = StoryDetails::where('user_id', Auth::id())->findOrFail($id);
        $storydetails->fill($validated);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('storydetails', 'public');
            $storydetails->image = $path;
        }
        $storydetails->save();

        return redirect()->route('user.stories.index')->with('success', 'Story updated successfully');
    }

    public function destroyStory($id)
    {
        $storydetails = StoryDetails::where('user_id', Auth::id())->findOrFail($id);
        $storydetails->delete();
        return redirect()->route('user.stories.index')->with('success', 'Story deleted successfully');
    }

    public function listChapters($storydetails_id)
    {
        $storydetails = StoryDetails::where('user_id', Auth::id())->findOrFail($storydetails_id);
        $chapters = $storydetails->chapters()->orderBy('id')->get();
        return view('user_stories.chapters.index', compact('storydetails', 'chapters'));
    }

    public function createChapter($storydetails_id)
    {
        $storydetails = StoryDetails::where('user_id', Auth::id())->findOrFail($storydetails_id);
        return view('user_stories.chapters.create', compact('storydetails'));
    }

    public function storeChapter(Request $request, $storydetails_id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $storydetails = StoryDetails::where('user_id', Auth::id())->findOrFail($storydetails_id);
        $chapter = new Chapter($validated);
        $chapter->storydetails_id = $storydetails_id;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('chapters', 'public');
            $chapter->image = $path;
        }
        $chapter->save();

        return redirect()->route('user.chapters.index', $storydetails_id)->with('success', 'Chapter created successfully');
    }

    public function editChapter($id)
    {
        $chapter = Chapter::whereHas('storydetails', function($query) {
            $query->where('user_id', Auth::id());
        })->findOrFail($id);
        return view('user_stories.chapters.edit', compact('chapter'));
    }

    public function updateChapter(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $chapter = Chapter::whereHas('storydetails', function($query) {
            $query->where('user_id', Auth::id());
        })->findOrFail($id);
        $chapter->fill($validated);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('chapters', 'public');
            $chapter->image = $path;
        }
        $chapter->save();

        return redirect()->route('user.chapters.index', $chapter->storydetails_id)->with('success', 'Chapter updated successfully');
    }

    public function destroyChapter($id)
    {
        $chapter = Chapter::whereHas('storydetails', function($query) {
            $query->where('user_id', Auth::id());
        })->findOrFail($id);
        $storydetails_id = $chapter->storydetails_id;
        $chapter->delete();
        return redirect()->route('user.chapters.index', $storydetails_id)->with('success', 'Chapter deleted successfully');
    }
}

