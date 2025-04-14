<?php

namespace App\Http\Controllers;

use App\Models\SoftwareProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoftwareProductController extends Controller
{
    public function index()
    {
        $products = SoftwareProduct::all();
        return view('software_products.index', compact('products'));
    }

    public function create()
    {
        return view('software_products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'nullable|string',
            'pricing_type' => 'required|in:free,paid',
            'price' => 'nullable|numeric',
            'main_file' => 'required|file',
            'screenshots' => 'nullable|array',
            'demo_url' => 'nullable|url',
        ]);

        $validated['user_id'] = Auth::id();
        $validated['main_file'] = $request->file('main_file')->store('uploads/software_files');

        $validated['screenshots'] = $request->has('screenshots') 
            ? json_encode($request->screenshots) 
            : null;

        SoftwareProduct::create($validated);

        return redirect()->route('software_products.index')->with('success', 'Software submitted successfully.');
    }

    public function show(SoftwareProduct $softwareProduct)
    {
        return view('software_products.show', compact('softwareProduct'));
    }

    public function edit(SoftwareProduct $softwareProduct)
    {
        return view('software_products.edit', compact('softwareProduct'));
    }

    public function update(Request $request, SoftwareProduct $softwareProduct)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'nullable|string',
            'pricing_type' => 'required|in:free,paid',
            'price' => 'nullable|numeric',
            'demo_url' => 'nullable|url',
        ]);

        if ($request->hasFile('main_file')) {
            $validated['main_file'] = $request->file('main_file')->store('uploads/software_files');
        }

        if ($request->has('screenshots')) {
            $validated['screenshots'] = json_encode($request->screenshots);
        }

        $softwareProduct->update($validated);

        return redirect()->route('software_products.index')->with('success', 'Software updated successfully.');
    }

    public function destroy(SoftwareProduct $softwareProduct)
    {
        $softwareProduct->delete();
        return redirect()->route('software_products.index')->with('success', 'Software deleted.');
    }
}
