<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrdersController extends Controller
{
    public function index() {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function changeStatus(Order $order, Request $request) {
        $order->status = $request->status;
        $order->save();
        return response()->json(['status' => 'success']);
    }
}
