<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index() {

        $total = 0.0;
        $orders = Order::with(['orderDetails.product'])->get()->map(function ($order) use (&$total) {
            $subTotal = $order->orderDetails->sum(function ($detail) {
                return $detail->quantity * $detail->product->price;
            });

            $total += $subTotal;

            return [
                'id' => $order->id,
                'date' => $order->created_at,
                'status' => $order->status,
                'total_products' => $order->orderDetails->count(),
                'subtotal' => $subTotal
            ];
        });

        return view('admin.sales.index', compact( 'total', 'orders'));
    }
}
