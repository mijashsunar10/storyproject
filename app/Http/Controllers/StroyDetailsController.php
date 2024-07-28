<?php

namespace App\Http\Controllers;

use App\Models\Storydetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class StroyDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('frontend.index');
        $storydetails = Storydetails::all();
        return view('frontend.new', compact('storydetails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.storydetails');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
//         $request->validate([
//             'title' => 'required|string|max:255',
//             'description' => 'nullable|string',
//             'main_characters' => 'nullable|string',
//             'author' => 'required|string|max:255',
//             'category_id' => 'nullable|exists:categories,id',
//             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust as needed
//             'audience' => 'required|in:child,young,adult',
//             'language' => 'required|string',
//             'copyright' => 'required|in:All_rights_reserved,Public_Domain',
//         ]);

//         $user_id = Auth()->user()->id;
//         // Create a new Storydetails instance and assign values
//         $storydetails = new Storydetails();

//         if ($request->hasFile('image')) {
//             $image = $request->file('image');
//             $imageName = time() . '.' . $image->getClientOriginalExtension();
//             $image->move(public_path('storydetails'), $imageName);
//             $storydetails->image= $imageName;
//         } 

//         $storydetails->title = $request->title;
//         $storydetails->description = $request->description;
//         $storydetails->main_characters = $request->main_characters;
//         $storydetails->author = $request->author;
//         $storydetails->category_id = $request->category_id;
//         $storydetails->image = $imageName;
//         $storydetails->user_id = $user_id;
//         $storydetails->audience = $request->audience;
//         $storydetails->language = $request->language;
//         $storydetails->copyright = $request->copyright;

//     // Save the storydetails instance
   
//     $storydetails->save();
//     // dd($request);
//    return redirect()->route('storydetails.show',$storydetails->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $storydetails = Storydetails::find($id);
        
        return view('frontend.show', compact('storydetails'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $storydetails = Storydetails::find($id);
        return view('frontend.edit_storydetails', compact('storydetails'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'main_characters' => 'required|string',
            'author' => 'required|string',
            'category_id' => 'required|integer',
            'audience' => 'required|string',
            'language' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust as needed
            'copyright' => 'required|string',
        ]);
        

        $story = Storydetails::findOrFail($id);
        $story->update($request->all());

        return redirect()->route('storydetails.show', $id)->with('success', 'Story details updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
