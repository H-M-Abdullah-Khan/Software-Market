<?php

namespace App\Http\Controllers;

use App\Models\Commission;
use Illuminate\Support\Facades\Auth;

class CompanyCommissionController extends Controller
{
    // Display all commissions for the logged-in company
    public function show()
    {
        // Get the logged-in company
        $company = Auth::user();

        // Fetch commissions for the logged-in company
        $commissions = Commission::with('softwareProduct')
            ->where('user_id', $company->id) // Assuming user_id is the foreign key for the company
            ->get();
        // dd($commissions);die();

        return view('company.commission', compact('commissions', 'company'));
    }
}
