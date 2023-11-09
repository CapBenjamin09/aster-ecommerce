<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $products = Product::all()->count();
        $categories = Category::all()->count();
        $clients = User::where('role', '=', 'client')->count();
        return view('dashboard', compact('products', 'categories', 'clients'));
    }
}
