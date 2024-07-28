<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewcategory()
    {
        $data=Category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $category = new Category();
        $category->category = $request->category_name;
        $category->description = $request->description;
        toastr()->timeOut(3000)->closeButton()->addSuccess('Category deleted successfully');
        // flash()->success('Category added successfully');
        $category->save();
        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();
         toastr()->timeOut(2000)->closeButton()->addSuccess('Category deleted successfully');
         return redirect()->back();
    }

    public function edit_category($id)
    {
        $data = Category::find($id);
        return view('admin.edit', compact('data'));
    }

    public function update_category(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $data = Category::find($id);
        $data->category = $request->category_name;
        $data->description = $request->description;
        $data->save();
        return redirect()->route('viewcategory');    
    }

    






}
