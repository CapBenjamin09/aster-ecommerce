<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = trim($request->search);
        $categories = Category::where('name', 'LIKE', '%' . $search . '%')->orderBy('name', 'asc')->paginate(5);;
        return view('admin.category.index', compact('categories', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCategoryRequest $request)
    {
        $data = $request->all();

        $image = $request->file('image_path');
        $nameImage = Str::uuid().'.'. $image->extension();

        $imageServer = Image::make($image)->fit(128, 128);
        $imagePath = public_path('categories').'/'.$nameImage;
        $imageServer->save($imagePath);
        $data['image_path'] = 'categories/'. $nameImage;
        Category::create($data);

        return redirect()->route('category.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $data = $request->all();

        if ($request->file('image_path')) {

            $image_path = public_path($category->image_path);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $image = $request->file('image_path');
            $nameImage = Str::uuid().'.'. $image->extension();

            $imageServer = Image::make($image)->fit(128, 128);
            $imagePath = public_path('categories').'/'.$nameImage;
            $imageServer->save($imagePath);
            $data['image_path'] = 'categories/'. $nameImage;
        }
        $category->update($data);

        return redirect()->route('category.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $image_path = public_path($category->image_path);
        $category->delete();

        if (file_exists($image_path)) {
            unlink($image_path);
        }

        return back()->with('eliminar', 'La categoría ha sido eliminada.');
    }
}
