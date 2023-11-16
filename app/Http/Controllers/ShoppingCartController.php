<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function index() {
        return view('client.cart.index');
    }

    public function addItem(Request $request) {
        $request->validate([
           'quantity' => 'required|integer|between:0,'. $request->product_stock
        ]);
        $product = Product::find($request->product_id);
        Cart::add($product->id, $product->name, $request->quantity, $product->price, ['image' => $request->product_image]);

        return redirect()->back();
    }

    public function removeItem(Request $request) {

        Cart::remove($request->rowId);

        return redirect()->back();

    }
}
