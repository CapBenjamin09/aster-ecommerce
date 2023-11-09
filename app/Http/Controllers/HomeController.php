<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
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
        $categories = Category::all();
        $products = Product::where('category_id', $category->id)->get();

        return view('client.category', compact('products', 'category', 'categories'));
    }

    //FUNCIÓN QUE ENVIAR AL SHOW DE PRODUCTO ESPECIFICO
    public function showProduct(Product $product) {
        $categories = Category::all();
        return view('client.product', compact('product', 'categories'));
    }

//    public function searchProduct(Request $request) {
//        $search = trim($request->search);
//        $products = Product::where('name', 'LIKE', '%' . $search . '%')->orderBy('name', 'asc');
//
//        dd($products);
//        return $products;
//        return view('client.search-product', compact('products', 'search'));
//    }


}
