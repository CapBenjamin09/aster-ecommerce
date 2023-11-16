<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class TrackerOrderController extends Controller
{
    public function index(Request $request) {

        $request->validate([
            'tracker' => 'numeric|nullable',
        ]);

        $tracker = trim($request->tracker);

//        $order = Order::find($tracker)->select('id','date', 'status');
        $order = Order::select(['id', 'date', 'status'])->find($tracker);

        return view('client.tracker.index', compact('order', 'tracker'));
    }

    public function show(Order $order) {
        $datos = OrderDetail::where('order_id', $order->id)->get();

        $total = 0;
        foreach ($datos as $dato) {
            $total += ($dato->quantity * $dato->product->price);
        }

        return view('client.tracker.show', compact('datos', 'total', 'order'));
    }
}
