<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Storydetails;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
//     public function create($storydetails_id)
//     {
//         $storydetails = Storydetails::findOrFail($storydetails_id);
//         return view('frontend.chapter.create', compact('storydetails'));
//     }

//     public function store(Request $request, $storydetails_id)
//     {
//         $request->validate([
//             'title' => 'required|string|max:255',
//             'content' => 'required|string',
//             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//         ]);

//         $chapter = new Chapter();
//         $chapter->storydetails_id = $storydetails_id;
//         $chapter->title = $request->title;
//         $chapter->content = $request->content;

//         if ($request->hasFile('image')) {
//             $image = $request->file('image');
//             $imageName = time() . '.' . $image->getClientOriginalExtension();
//             $image->move(public_path('chapters'), $imageName);
//             $chapter->image = $imageName;
//         }

//         $chapter->save();

//         return redirect()->route('chapters.index', $storydetails_id)->with('success', 'Chapter added successfully.');
//     }
//     // public function show($id)
//     // {
//     //     $chapter = Chapter::findOrFail($id);
//     //     return view('frontend.chapter.show', compact('chapter'));
//     // }

// //     public function show($id)
// // {
// //     $chapter = Chapter::findOrFail($id);
// //     $storydetails_id = $chapter->storydetails_id;

// //     $previousChapter = Chapter::where('storydetails_id', $storydetails_id)
// //                                 ->where('id', '<', $chapter->id)
// //                                 ->orderBy('id', 'desc')
// //                                 ->first();

// //     $nextChapter = Chapter::where('storydetails_id', $storydetails_id)
// //                           ->where('id', '>', $chapter->id)
// //                           ->orderBy('id')
// //                           ->first();

// //     return view('frontend.chapter.show', compact('chapter', 'previousChapter', 'nextChapter'));
// // }

// public function show($id)
// {
//     $chapter = Chapter::findOrFail($id);
//     $storydetails_id = $chapter->storydetails_id;

//     $previousChapter = Chapter::where('storydetails_id', $storydetails_id)
//                                 ->where('id', '<', $chapter->id)
//                                 ->orderBy('id', 'desc')
//                                 ->first();

//     $nextChapter = Chapter::where('storydetails_id', $storydetails_id)
//                           ->where('id', '>', $chapter->id)
//                           ->orderBy('id')
//                           ->first();

//     $allChapters = Chapter::where('storydetails_id', $storydetails_id)->orderBy('id')->get();

//     return view('frontend.chapter.show', compact('chapter', 'previousChapter', 'nextChapter', 'allChapters'));
// }




//     // public function index($storydetails_id)
//     // {
       
//     //     $storydetails = Storydetails::findOrFail($storydetails_id);
//     //     $chapters = $storydetails->chapters ?? collect(); // Ensure chapters is a collection
//     //     return view('frontend.chapter.index', compact('storydetails', 'chapters'));
//     // }
//     public function index($storydetails_id)
// {
//     $storydetails = Storydetails::findOrFail($storydetails_id);
//     $chapters = Chapter::where('storydetails_id', $storydetails_id)->get();

//     return view('frontend.chapter.index', compact('storydetails', 'chapters'));
// }

public function index($storydetails_id)
    {
        $storydetails = Storydetails::findOrFail($storydetails_id);
        $chapters = Chapter::where('storydetails_id', $storydetails_id)->get(); //Chapter::indicate the chapter model
        return view('frontend.chapter.index', compact('storydetails', 'chapters'));
        // -> Chapter represent chapter model.model represents a table in the database and provides an easy way to interact with that table.
            // ->'storydetails_id' => name of the column of the chapters tabe .
            // ->$storydetails_id is the variable the hold the value you want ro match.
            // ->get():This method executes the query and retrieves the results from the database.

    }

    public function create($storydetails_id)
    {
        $storydetails = Storydetails::findOrFail($storydetails_id);
        return view('frontend.chapter.create', compact('storydetails_id','storydetails'));
    }

    public function store(Request $request, $storydetails_id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $chapter = new Chapter();
       
        $chapter->storydetails_id = $storydetails_id;
        $chapter->title = $request->title;
        $chapter->content = $request->content;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('chapter'), $imageName);
            $chapter->image = $imageName;
        }
      
        // $chapter->image = $im    ageName;
        

        $chapter->save();
        return redirect()->route('chapters.index', $storydetails_id);
    }

    public function show($id)
    {
        $chapter = Chapter::findOrFail($id);
        $storydetails = $chapter->storydetails;
        $allChapters = $storydetails->chapters;

        $previousChapter = $storydetails->chapters()->where('id', '<', $chapter->id)->orderBy('id', 'desc')->first();
        $nextChapter = $storydetails->chapters()->where('id', '>', $chapter->id)->orderBy('id', 'asc')->first();

        return view('frontend.chapter.show', compact('chapter', 'previousChapter', 'nextChapter', 'allChapters'));
    }

    public function edit($id)
    {
        $chapter = Chapter::findOrFail($id);
        return view('frontend.chapter.useredit', compact('chapter'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $chapter = Chapter::findOrFail($id);
        $chapter->title = $request->title;
        $chapter->content = $request->content;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('chapters'), $imageName);
            $chapter->image = $imageName;
        }

        $chapter->save();
        return redirect()->route('frontend.chapter.index', $chapter->storydetails_id);
    }

    public function destroy($id)
    {
        $chapter = Chapter::findOrFail($id);
        $chapter->delete();
        return redirect()->route('frontend.chapter.index', $chapter->storydetails_id);
    }

}
