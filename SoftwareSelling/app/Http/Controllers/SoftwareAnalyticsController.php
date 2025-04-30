<?php

namespace App\Http\Controllers;

use App\Models\SoftwareAnalytics;
use Illuminate\Http\Request;

class SoftwareAnalyticsController extends Controller
{
    public function index()
    {
        $analytics = SoftwareAnalytics::all();
        return response()->json($analytics);
    }

    public function show($id)
    {
        $analytics = SoftwareAnalytics::findOrFail($id);
        return response()->json($analytics);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'software_id' => 'required|exists:software,id',
            'downloads' => 'required|integer',
            'views' => 'required|integer',
        ]);

        $analytics = SoftwareAnalytics::create($validatedData);
        return response()->json($analytics, 201);
    }

    public function update(Request $request, $id)
    {
        $analytics = SoftwareAnalytics::findOrFail($id);
        $validatedData = $request->validate([
            'downloads' => 'required|integer',
            'views' => 'required|integer',
        ]);

        $analytics->update($validatedData);
        return response()->json($analytics);
    }

    public function destroy($id)
    {
        $analytics = SoftwareAnalytics::findOrFail($id);
        $analytics->delete();
        return response()->json(null, 204);
    }
}