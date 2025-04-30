<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return response()->json($payments);
    }

    public function show($id)
    {
        $payment = Payment::findOrFail($id);
        return response()->json($payment);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'payment_date' => 'required|date',
            'amount' => 'required|numeric',
            'payment_method' => 'required|string',
            'status' => 'required|in:Pending,Completed,Failed',
            'transaction_id' => 'required|string|unique:payments',
        ]);

        $payment = Payment::create($validatedData);
        return response()->json($payment, 201);
    }

    public function update(Request $request, $id)
    {
        $payment = Payment::findOrFail($id);
        $validatedData = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'payment_date' => 'required|date',
            'amount' => 'required|numeric',
            'payment_method' => 'required|string',
            'status' => 'required|in:Pending,Completed,Failed',
            'transaction_id' => 'required|string|unique:payments,transaction_id,' . $payment->id,
        ]);

        $payment->update($validatedData);
        return response()->json($payment);
    }

    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();
        return response()->json(null, 204);
    }
}