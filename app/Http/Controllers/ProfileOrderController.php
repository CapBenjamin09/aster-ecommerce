<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileOrderController extends Controller
{
    public function index(User $user)
    {
        $orders = Order::select('id', 'date', 'status', 'user_id')
                        ->where('user_id', $user->id)->paginate(10);
        return view('client.profile.order.index', compact('orders'));
    }

    public  function show(Order $order)
    {
        $details = OrderDetail::where('order_id', $order->id)->get();
        $total = 0;
        foreach ($details as $detail) {
            $total += ($detail->quantity * $detail->product->price);
        }
        return view('client.profile.order.show', compact('order', 'details', 'total'));
    }
}
