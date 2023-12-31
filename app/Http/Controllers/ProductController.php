<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = trim($request->search);
        $products = Product::where('name', 'LIKE', '%' . $search . '%')->orderBy('name', 'asc')->paginate(5);

        return view('admin.product.index', compact('products', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProductRequest $request)
    {
        $data = $request->all();

        $image = $request->file('image_path');
        $nameImage = Str::uuid().'.'. $image->extension();
        $imageServer = Image::make($image)->fit(500, 500);
        $imagePath = public_path('products').'/'.$nameImage;
        $imageServer->save($imagePath);
        $data['image_path'] = 'products/'. $nameImage;
        Product::create($data);

        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->all();

        if ($request->file('image_path')) {
            $image_path = public_path($product->image_path);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $image = $request->file('image_path');
            $nameImage = Str::uuid().'.'. $image->extension();

            $imageServer = Image::make($image)->fit(500, 500);
            $imagePath = public_path('products').'/'.$nameImage;
            $imageServer->save($imagePath);
            $data['image_path'] = 'products/'. $nameImage;
        }
        $product->update($data);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $image_path = public_path($product->image_path);
        $product->delete();

        if (file_exists($image_path)) {
            unlink($image_path);
        }

        return back()->with('eliminar', 'El producto ha sido eliminado.');
    }
}
