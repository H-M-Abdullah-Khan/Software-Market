<?php

namespace App\Http\Controllers;

use App\Models\PurchaseRequest;
use App\Models\Approval;
use Illuminate\Http\Request;

class PurchaseRequestController extends Controller
{
    public function index()
    {
        $requests = PurchaseRequest::all();
        return view('admin/ecommerce-orders', compact('requests'));
    }

    public function create()
    {
        return view('explore-1.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'software_name' => 'required|string',
            'amount' => 'required|numeric',
        ]);

        $purchaseRequest = PurchaseRequest::create([
            'buyer_id' => auth()->user->id(),
            'software_name' => $request->software_name,
            'amount' => $request->amount,
        ]);

        return redirect()->route('orders.index')->with('success', 'Purchase request submitted successfully!');
    }

    public function approve($id)
    {
        $purchaseRequest = PurchaseRequest::findOrFail($id);
        $purchaseRequest->update(['status' => 'approved']);

        Approval::create([
            'purchase_request_id' => $purchaseRequest->id,
            'user_id' => auth()->user->id(),
            'status' => 'approved',
        ]);

        return redirect()->route('orders.index')->with('success', 'Purchase request approved successfully!');
    }

    public function reject($id)
    {
        $purchaseRequest = PurchaseRequest::findOrFail($id);
        $purchaseRequest->update(['status' => 'rejected']);

        Approval::create([
            'purchase_request_id' => $purchaseRequest->id,
            'user_id' => auth()->user->id(),
            'status' => 'rejected',
        ]);

        return redirect()->route('orders.index')->with('success', 'Purchase request rejected successfully!');
    }
}
