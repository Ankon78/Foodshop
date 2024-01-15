<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category_list = Category::all();
        return view('category.index',compact('category_list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->except('image');

        //check if has file
        if ($request->hasFile('image')) {

            // hold image in a variable
            $imagefile = $request->image;

            // give new name of image
            $image_name = mt_rand() . '.' . $imagefile->extension();

            // upload image in a file
            $imagefile->move(public_path('images/category'), $image_name);

            // define image path name
            $path = 'images/category/' . $image_name;

            // store image in database variable
            $requestData['image'] = $path;
        }

        // Create product
        Category::create($requestData);
        return to_route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $category = Category::findOrfail($id);
        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData=$request->except('_token','_method','image');
         //check if has file
         if ($request->hasFile('image')) {

            // hold image in a variable
            $imagefile = $request->image;

            // give new name of image
            $image_name = mt_rand() . '.' . $imagefile->extension();

            // upload image in a file
            $imagefile->move(public_path('images/category'), $image_name);

            // define image path name
            $path = 'images/category/' . $image_name;

            // store image in database variable
            $requestData['image'] = $path;
        }
        Category::where('id',$id)->update($requestData);
        return to_route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::where('id',$id)->delete();
        return to_route('category.index');
    }
}
