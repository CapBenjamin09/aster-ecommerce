<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $managements = Order::select('user_id', 'id', 'status', 'date')
            ->orderBy('date', 'desc')
            ->get();

        return view('admin.management.index', compact('managements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $management)
    {

        $details = OrderDetail::where('order_id', $management->id)->get();
        $total = 0;
        foreach ($details as $detail) {
            $total += ($detail->quantity * $detail->product->price);
        }

        return view('admin.management.edit', compact('management', 'details', 'total'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $management)
    {
        $management->status = $request->status;
        $management->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
