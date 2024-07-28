<?php

namespace App\Http\Controllers;

use App\Models\Storydetails;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function profile()
    {
        return view('frontend.profile.profile');
    }
    public function storydetails_create()
    {
        return view('frontend.storydetails');

    }
    public function storydetails_store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'main_characters' => 'nullable|string',
            'author' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust as needed
            'audience' => 'required|in:child,young,adult',
            'language' => 'required|string',
            'copyright' => 'required|in:All_rights_reserved,Public_Domain',
        ]);

        $user_id = Auth()->user()->id;
        // Create a new Storydetails instance and assign values
        $storydetails = new Storydetails();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storydetails'), $imageName);
            $storydetails->image= $imageName;
        } 

        $storydetails->title = $request->title;
        $storydetails->description = $request->description;
        $storydetails->main_characters = $request->main_characters;
        $storydetails->author = $request->author;
        $storydetails->category_id = $request->category_id;
        $storydetails->image = $imageName;
        $storydetails->user_id = $user_id;
        $storydetails->audience = $request->audience;
        $storydetails->language = $request->language;
        $storydetails->copyright = $request->copyright;

    // Save the storydetails instance
    $storydetails->save();
   return redirect()->route('storydetails.show',$storydetails->id);
    }

    public function show($id)
    {
        $storydetails = Storydetails::with(['category', 'user'])->findOrFail($id);
        return view('storydetails.show', compact('storydetails'));
    }

    public function edit($id)
    {
        $storydetails = Storydetails::find($id);
        return view('frontend.edit_storydetails', compact('storydetails'));
    }

   public function update(Request $request, $id)
{
    // Validate the incoming request data
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'main_characters' => 'required|string',
        'author' => 'required|string',
        'category_id' => 'required|integer',
        'audience' => 'required|string',
        'language' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'copyright' => 'required|string',
    ]);

    // Find the existing story details by ID
    $storydetails = Storydetails::findOrFail($id);

    // Handle the image upload if a new image is provided
    if ($request->hasFile('image')) {
        // Get the old image path
        $oldImage = $storydetails->image;

        // Store the new image
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storydetails'), $imageName);

        // Update the story details with the new image path
        $storydetails->image = $imageName;

        // Delete the old image if it exists
        if ($oldImage && file_exists(public_path('storydetails/' . $oldImage))) {
            unlink(public_path('storydetails/' . $oldImage));
        }
    }

    // Update the story details with the rest of the request data
    $storydetails->title = $request->title;
    $storydetails->description = $request->description;
    $storydetails->main_characters = $request->main_characters;
    $storydetails->author = $request->author;
    $storydetails->category_id = $request->category_id;
    $storydetails->audience = $request->audience;
    $storydetails->language = $request->language;
    $storydetails->copyright = $request->copyright;

    // Save the updated story details
    $storydetails->save();

    // Redirect to the story details page with a success message
    return redirect()->route('storydetails.show', $id)->with('success', 'Story details updated successfully.');
}


public function write()
{
    return view('frontend.storywriting');
}





    public function tableofContent()
    {
        return view('frontend.tableofContent');

    }

    public function new()
    {
        return view('frontend.new');
    }

}
