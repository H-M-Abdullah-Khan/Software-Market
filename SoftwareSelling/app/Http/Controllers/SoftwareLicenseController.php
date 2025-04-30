<?php

namespace App\Http\Controllers;

use App\Models\SoftwareLicense;
use Illuminate\Http\Request;

class SoftwareLicenseController extends Controller
{
    public function index()
    {
        $licenses = SoftwareLicense::all();
        return response()->json($licenses);
    }

    public function show($id)
    {
        $license = SoftwareLicense::findOrFail($id);
        return response()->json($license);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'software_id' => 'required|exists:software,id',
            'license_key' => 'required|string|max:100|unique:software_licenses',
            'expiration_date' => 'required|date',
        ]);

        $license = SoftwareLicense::create($validatedData);
        return response()->json($license, 201);
    }

    public function update(Request $request, $id)
    {
        $license = SoftwareLicense::findOrFail($id);
        $validatedData = $request->validate([
            'software_id' => 'required|exists:software,id',
            'license_key' => 'required|string|max:100|unique:software_licenses,license_key,' . $license->id,
            'expiration_date' => 'required|date',
        ]);

        $license->update($validatedData);
        return response()->json($license);
    }

    public function destroy($id)
    {
        $license = SoftwareLicense::findOrFail($id);
        $license->delete();
        return response()->json(null, 204);
    }
}