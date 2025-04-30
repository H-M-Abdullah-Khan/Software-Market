<?php

namespace App\Http\Controllers;

use App\Models\SoftwareDownload;
use Illuminate\Http\Request;

class SoftwareDownloadController extends Controller
{
    public function index()
    {
        $downloads = SoftwareDownload::all();
        return response()->json($downloads);
    }

    public function show($id)
    {
        $download = SoftwareDownload::findOrFail($id);
        return response()->json($download);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'software_id' => 'required|exists:software,id',
            'downloaded_at' => 'required|date',
            'download_link' => 'required|string',
        ]);

        $download = SoftwareDownload::create($validatedData);
        return response()->json($download, 201);
    }

    public function update(Request $request, $id)
    {
        $download = SoftwareDownload::findOrFail($id);
        $validatedData = $request->validate([
            'downloaded_at' => 'required|date',
            'download_link' => 'required|string',
        ]);

        $download->update($validatedData);
        return response()->json($download);
    }

    public function destroy($id)
    {
        $download = SoftwareDownload::findOrFail($id);
        $download->delete();
        return response()->json(null, 204);
    }
}