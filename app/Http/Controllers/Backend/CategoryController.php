<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        return view('admin.categori.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categori.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();
        if ($request->hasFile('image')) 
        {
            $imageFile = $request->file('image');
            $imageExt = $imageFile->getClientOriginalExtension();
            $imageName = time() .'.'. $imageExt;
            $imageFile->move('assets/uploads/category/',$imageName);
            $category->image = $imageName;
        }
        $category->name = $request->input('name');
        $category->save();

        return redirect('/category')->with('status', 'Kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('admin.categori.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        if ($request->hasFile('image'))
        {
        $path = 'assets/uploads/category/'.$category->image;
            if (File::exists($path))
            {
                File::delete($path);
            } 
            $imageFile = $request->file('image');
            $imageExt = $imageFile->getClientOriginalExtension();
            $imageName = time() .'.'. $imageExt;
            $imageFile->move('assets/uploads/category/',$imageName);
            $category->image = $imageName;
        }
        $category->name = $request->input('name');
        $category->update();

        return redirect('/category')->with('status', 'Kategori berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        if ($category->image) 
        { 
            $path = 'assets/uploads/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $category->delete();
        return redirect('categories')->with('status', 'Category berhasil dihapus');
    }
}
