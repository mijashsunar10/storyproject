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

    // public function show($id)
    // {
    //     $chapter = Chapter::findOrFail($id);//used to retrieve the chapter with the given ID.
    //     $storydetails = $chapter->storydetails;//we use the relationship defined in the Chapter model to get the story that this chapter belongs to 
    //     $allChapters = $storydetails->chapters;//This line gets all chapters related to the retrieved story. The chapters is assumed to be a method in the StoryDetails model that defines a relationship (likely a hasMany relationship).

    //     $previousChapter = $storydetails->chapters()->where('id', '<', $chapter->id)->orderBy('id', 'desc')->first();// retrieves the chapter with the highest ID that is less than the current chapter's ID. 
    //     /*$storydetails->chapters()=This retrieves the chapters related to the storydetails all chapters of the storydetails
    //     $chapter->id is the ID of the current chapter, so this condition filters out all chapters whose IDs are less than the current chapter's ID.
    //     orderBy('id', 'desc')=This orders the filtered chapters in descending order by their ID.
    //     first();->result are in descending order chapter with highest id but still less than the current chapterid
    //             */
    //             $nextChapter = $storydetails->chapters()->where('id', '>', $chapter->id)->orderBy('id', 'asc')->first();
    //             /*   $storydetails->chapters():Accesses the chapters relationship of the StoryDetails model 
    //                where('id', '>', $chapter->id)= Adds a filter to the query to include only chapters with an ID greater than the current chapter's ID.
    //                orderBy('id', 'asc'):rders the resulting chapters by ID in ascending order, so the chapter with the lowest ID that meets the where condition will be at the top.*/

    //     return view('frontend.chapter.show', compact('chapter', 'previousChapter', 'nextChapter', 'allChapters'));
    // }

    // ChapterController.php

public function show($id)
{
    $chapter = Chapter::with('storydetails.category')->findOrFail($id); //Fetch the chapter along with sotrydetails using Eloquent"s oRM
    $storydetails = $chapter->storydetails; //we use the relationship in the chpater model to get the storrythis chapter belongs to
    $category = $storydetails->category;

    $previousChapter = Chapter::where('storydetails_id', $storydetails->id)->where('id', '<', $chapter->id)->orderBy('id', 'desc')->first();
    //Chapter::where('storydetails_id', $storydetails->id):Filter to only include chapters from the same story (storydetails_id).. The storydetails_id is the foreign key in the chapters table that links it to the storydetails table.
    //where('id', '<', $chapter->id):we are looking for chapters that come before the current chapter in the sequence.
    //->orderBy('id', 'desc'):This sorts the results in descending order based on the id.
    //This retrieves the first result from the sorted list.
    $nextChapter = Chapter::where('storydetails_id', $storydetails->id)->where('id', '>', $chapter->id)->orderBy('id')->first();
    $allChapters = Chapter::where('storydetails_id', $storydetails->id)->get();

    foreach ($allChapters as $index => $chap) {
        $chap->sequence_number = $index + 1;
    }

    $currentChapterIndex = $allChapters->search(function ($chap) use ($chapter) {
        return $chap->id == $chapter->id;
    });
    // Add sequence numbers to the chapters

    return view('frontend.chapter.show', compact('chapter', 'storydetails', 'previousChapter', 'nextChapter', 'allChapters','category','currentChapterIndex'));
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
        // return redirect()->route('frontend.chapter.index', $chapter->storydetails_id);
        return redirect()->route('chapters.index', $chapter->storydetails_id);
    }

    public function destroy($id)
    {
        $chapter = Chapter::findOrFail($id);
        $chapter->delete();
        return redirect()->route('chapters.index', $chapter->storydetails_id);
    }

}
