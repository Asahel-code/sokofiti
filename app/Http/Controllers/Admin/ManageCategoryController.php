<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class ManageCategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('ads')->get();
        return view('layouts.admin.category', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.post-category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation ruless
        $request->validate([
            'categoryname' => 'required',
            'image' => 'required'
        ]);

        $name = $request->categoryname;
        $slug = $name;
        $image = $request->image;

        $imageName = $image->getClientOriginalName();
        // $size = $image->getSize();
        // $ext = $image->getClientOriginalExtension();
        $newImage = time() . $imageName;
        $path = "storage/uploads";
        $image->move($path, $newImage);


        $category = new Category();
        $category->name = $name;
        $category->slug = $slug;
        $category->image = $newImage;
        $category->save();

        return redirect()->route('admin_category.index')->withSuccess('A new category has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();

        return view('layouts.admin.edit-category', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validation ruless
        $request->validate([
            'categoryname' => 'required',
            'image' => 'required'
        ]);

        $name = $request->categoryname;
        $slug = $name;
        $image = $request->image;

        $imageName = $image->getClientOriginalName();
        // $size = $image->getSize();
        // $ext = $image->getClientOriginalExtension();
        $newImage = time() . $imageName;
        $path = "storage/uploads";
        $image->move($path, $newImage);


        Category::where('id', $id)->update([
            'name' => $name,
            'slug' => $slug,
            'image' => $newImage
        ]);

        return redirect()->route('admin_category.index')->withSuccess('A category has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
