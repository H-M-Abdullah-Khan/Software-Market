<?php

namespace App\Http\Controllers;

use App\Models\Commission;
use App\Models\SoftwareProduct;
use Illuminate\Http\Request;

class CommissionController extends Controller
{
    public function index()
    {
        $softwareProducts = SoftwareProduct::with(['commissions','users'])->get();
        return view('admin.commissions', compact('softwareProducts'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'software_product_id' => 'required|exists:software_products,id',
            'commission_rate' => 'required|numeric|min:0|max:100',
            'user_id' => 'required|exists:users,id',
        ]);

        Commission::create($data);

        return redirect()->back()->with('success', 'Commission added successfully.');
    }

    /**
     * Update the specified commission in storage.
     */
    public function update(Request $request, $id)
    {
        $commission = Commission::findOrFail($id);

        $data = $request->validate([
            'commission_rate' => 'required|numeric|min:0|max:100',
            // 'user_id' is not required for update since it should not change
        ]);

        $commission->update($data);

        return redirect()->back()->with('success', 'Commission updated successfully.');
    }

    /**
     * Remove the specified commission from storage.
     */
    public function destroy($id)
    {
        $commission = Commission::findOrFail($id);
        $commission->delete();

        return redirect()->back()->with('success', 'Commission deleted successfully.');
    }
}
