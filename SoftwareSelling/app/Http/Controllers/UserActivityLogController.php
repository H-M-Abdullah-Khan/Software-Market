<?php

namespace App\Http\Controllers;

use App\Models\UserActivityLog;
use Illuminate\Http\Request;

class UserActivityLogController extends Controller
{
    public function index()
    {
        $logs = UserActivityLog::all();
        return response()->json($logs);
    }

    public function show($id)
    {
        $log = UserActivityLog::findOrFail($id);
        return response()->json($log);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'activity' => 'required|string',
        ]);

        $log = UserActivityLog::create($validatedData);
        return response()->json($log, 201);
    }

    public function update(Request $request, $id)
    {
        $log = UserActivityLog::findOrFail($id);
        $validatedData = $request->validate([
            'activity' => 'required|string',
        ]);

        $log->update($validatedData);
        return response()->json($log);
    }

    public function destroy($id)
    {
        $log = UserActivityLog::findOrFail($id);
        $log->delete();
        return response()->json(null, 204);
    }
}