<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        $categories = Category::all();
        $products = Product::all()->sortByDesc('id')->take(8);

        return view('client.home', compact('categories', 'products'));
    }

    //FUNCIÓN QUE ENVIAR AL SHOW DE CATEGORY ESPECIFICO
    public function showCategory(Category $category) {
        $products = Product::where('category_id', $category->id)->get();

        return view('client.category', compact('products', 'category'));
    }

    //FUNCIÓN QUE ENVIAR AL SHOW DE PRODUCTO ESPECIFICO
    public function showProduct(Product $product) {

        return view('client.product', compact('product'));
    }
}
