<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['user', 'softwareProduct'])->get(); // Fetch all orders
        return view('admin/ecommerce-orders', compact('orders')); // Ensure the view name is correct
    }

    public function show($id)
    {
        $orders = Order::findOrFail($id);
        return view('admin/ecommerce-orders', compact('order'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_name' => 'required|string',
            'order_date' => 'required|date',
            'customer_name' => 'required|string',
            'payment' => 'required|string',
            'payment_status' => 'required|string',
            'total_price' => 'required|numeric',
            'quantity' => 'required|integer',
            'order_status' => 'required|string',
        ]);

        $order = Order::create([
            'user_id' => Auth::user()->id,
            'software_id' => $request->input('software_id'),
            'order_date' => $validatedData['order_date'],
            'total_amount' => $validatedData['total_price'],
            'status' => $validatedData['order_status'],
            'invoice' => uniqid(),
        ]);
        return response()->json([
            'success' => true,
            'product_name' => $validatedData['product_name'], // Use validated data
            'order_date' => $order->order_date,
            'customer_name' => $validatedData['customer_name'], // Use validated data
            'payment' => $validatedData['payment'], // Use validated data
            'payment_status' => $validatedData['payment_status'], // Use validated data
            'total_price' => $order->total_amount,
            'quantity' => $validatedData['quantity'], // Use validated data
            'order_status' => $order->status,
            'invoice_number' => $order->invoice,
        ]);

        return redirect('explore-1');
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'software_id' => 'required|exists:software,software_id',
            'total_amount' => 'required|numeric',
            'status' => 'required|in:Pending,Completed,Cancelled',
            'invoice' => 'required|string|unique:orders,invoice,' . $order->id,
        ]);

        $order->update($validatedData);
        return response()->json($order);
    }

    public function destroy($order_id)
    {
        // $order = Order::where('order_id', $order_id)->firstOrFail();
        // Find the order by ID and delete it
        $order = Order::findOrFail($order_id);
        $order->delete();
        // Redirect back with a success message
        return redirect('admin/ecommerce-orders')->with('success', 'Order deleted successfully!');
    }

    public function query(Request $request)
    {
        // Start with the base query
        $orders = Order::with(['user', 'softwareProduct']);

        // Apply filters based on the request inputs
        if ($request->filled('orderDate')) {
            $orders->whereDate('order_date', $request->orderDate);
        }

        if ($request->filled('orderId')) {
            $orders->where('order_id', $request->orderId); // Assuming order_id is the primary key
        }

        if ($request->filled('productName')) {
            $orders->whereHas('softwareProduct', function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->productName . '%');
            });
        }

        if ($request->filled('customerName')) {
            $orders->whereHas('user', function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->customerName . '%');
            });
        }

        if ($request->filled('payment')) {
            $orders->where('payment', $request->payment);
        }

        if ($request->filled('paymentStatus')) {
            $orders->where('payment_status', $request->paymentStatus);
        }

        if ($request->filled('minPrice')) {
            $orders->where('total_amount', '>=', $request->minPrice);
        }

        if ($request->filled('maxPrice')) {
            $orders->where('total_amount', '<=', $request->maxPrice);
        }

        if ($request->filled('orderStatus')) {
            $orders->where('status', $request->orderStatus);
        }

        // Get the filtered orders
        $orders = $orders->get();

        return view('admin/ecommerce-orders', compact('orders'));
    }
}
