<?php

namespace App\Http\Controllers;

use App\Models\SoftwareProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\SoftwareStatusNotification;


class SoftwareProductController extends Controller
{
    public function index()
    {
        $products = SoftwareProduct::all();
        return view('explore-1', compact('products'));
    }
    public function index2()
    {
        $products = SoftwareProduct::all();
        return view('admin/ecommerce-products', compact('products'));
    }
    public function create()
    {
        $products = SoftwareProduct::all();
        return view('admin/ecommerce-add-product', compact('products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'nullable|string',
            'pricing_type' => 'required|in:free,paid',
            'price' => 'nullable|bignit',
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

    public function Search(Request $request)
{
    $query = SoftwareProduct::query();

    // Search by name
    if ($request->filled('search')) {
        $query->where('name', 'like', '%' . $request->search . '%');
    }

    // Filter by category
    if ($request->filled('category')) {
        $query->where('category', $request->category);
    }

    // Filter by price range
    if ($request->filled('min_price')) {
        $query->where('price', '>=', $request->min_price);
    }

    if ($request->filled('max_price')) { 
        $query->where('price', '<=', $request->max_price);
    }

    // $products = $query->get(); // or paginate() if needed
    // $categories = category::all(); // for dropdown
    $products = $query->get();
    return view('explore-1', compact('products'));
    }
    public function Search1(Request $request)
    {
    $queryy = SoftwareProduct::query();

    // Search by name
    if ($request->filled('search')) {
        $queryy->where('name', 'like', '%' . $request->search . '%');
    }

    // Filter by category
    if ($request->filled('category')) {
        $queryy->where('category', $request->category);
    }

    // Filter by price range
    if ($request->filled('min_price')) {
        $queryy->where('price', '>=', $request->min_price);
    }

    if ($request->filled('max_price')) {
        $queryy->where('price', '<=', $request->max_price);
    }

    // $products = $query->get(); // or paginate() if needed
    // $categories = category::all(); // for dropdown
    $products = $queryy->get();
    return view('admin/ecommerce-products', compact('products'));
}
public function approve(SoftwareProduct $softwareProduct)
{
    $softwareProduct->update(['status' => 'approved']);
    $softwareProduct->user->notify(new SoftwareStatusNotification('approved', $softwareProduct->name));
    return redirect()->back()->with('success', 'Software approved.');
}

public function reject(SoftwareProduct $softwareProduct)
{
    $softwareProduct->update(['status' => 'rejected']);
    $softwareProduct->user->notify(new SoftwareStatusNotification('rejected', $softwareProduct->name));
    return redirect()->back()->with('error', 'Software rejected.');
}

}