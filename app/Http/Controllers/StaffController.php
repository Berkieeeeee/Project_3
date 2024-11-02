<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\PizzaOrder;
use App\Models\PizzaStatus;

class StaffController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('staff.dashboard', ['orders' => $orders]);
    }

    public function show($id)
    {
        $order = Order::find($id);

        return view('staff.show', ['order' => $order]);
    }


    public function update(Request $request, Order $order)
    {
        $order->status_order = $request->order_status;
        $order->save();

        return redirect()->route('staff.show', ['order' => $order->id]);
    }
}
