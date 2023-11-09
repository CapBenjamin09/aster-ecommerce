<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentRequest;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index() {
        return view('client.payment.index');
    }

    public function store(StorePaymentRequest $request) {
        $data = $request->all();
        $data['date'] = Carbon::now();
        $data['status'] = 'En Proceso';

        $rows = json_decode($request->cart);
        unset($data['cart']);

        Order::create($data);
        $order = Order::all()->last();


        foreach ($rows as $row) {
        OrderDetail::create([
            'order_id' => $order->id,
            'quantity' => $row->qty,
            'product_id' => $row->id,
        ]);

        $product = Product::find($row->id);
        $stock = $product->stock;
        $newStock = $stock - intval($row->qty);
        $product->stock = $newStock;
        $product->save();
        }
        Cart::destroy();

        return redirect()->route('cart.index');
    }

    public function orderCompletion(){

        return view ('client.payment.orderCompletion');

    }
}
