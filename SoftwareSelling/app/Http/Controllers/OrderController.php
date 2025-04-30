<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return response()->json($orders);
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return response()->json($order);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,user_id',
            'software_id' => 'required|exists:software,software_id',
            'total_amount' => 'required|numeric',
            'status' => 'required|in:Pending,Completed,Cancelled',
            'invoice' => 'required|string|unique:orders',
        ]);

        $order = Order::create($validatedData);
        return response()->json($order, 201);
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,user_id',
            'software_id' => 'required|exists:software,software_id',
            'total_amount' => 'required|numeric',
            'status' => 'required|in:Pending,Completed,Cancelled',
            'invoice' => 'required|string|unique:orders,invoice,' . $order->id,
        ]);

        $order->update($validatedData);
        return response()->json($order);
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return response()->json(null, 204);
    }
}
