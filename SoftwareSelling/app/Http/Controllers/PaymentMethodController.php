<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index()
    {
        $methods = PaymentMethod::all();
        return response()->json($methods);
    }

    public function show($id)
    {
        $method = PaymentMethod::findOrFail($id);
        return response()->json($method);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'method_name' => 'required|string|max:50',
        ]);

        $method = PaymentMethod::create($validatedData);
        return response()->json($method, 201);
    }

    public function update(Request $request, $id)
    {
        $method = PaymentMethod::findOrFail($id);
        $validatedData = $request->validate([
            'method_name' => 'required|string|max:50',
        ]);

        $method->update($validatedData);
        return response()->json($method);
    }

    public function destroy($id)
    {
        $method = PaymentMethod::findOrFail($id);
        $method->delete();
        return response()->json(null, 204);
    }
}