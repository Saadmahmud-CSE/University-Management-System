<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;
use App\Models\User;

class LeaveController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->session()->get('username');

        if (!$user) {
            return redirect()->route('login')->with('info', 'Please login first');
        }

        $user = User::where('name', $user)->first();

        // Show all leave requests for Admin, otherwise only user's own requests
        $leaves = $user->role == 'Admin' ? Leave::all() : Leave::where('user_id', $user->id)->get();

        return view('leave.index', compact('leaves'));
    }

    public function store(Request $request)
    {
        $user = $request->session()->get('username');

        if (!$user) {
            return redirect()->route('login')->with('info', 'Please login first');
        }

        $user = User::where('name', $user)->first();

        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        Leave::create([
            'user_id' => $user->id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => 'pending',
        ]);

        return redirect()->route('leave.index')->with('success', 'Leave request submitted successfully');
    }

    public function update(Request $request, $id)
    {
        $user = $request->session()->get('username');

        if (!$user) {
            return redirect()->route('login')->with('info', 'Please login first');
        }

        $user = User::where('name', $user)->first();

        $leave = Leave::findOrFail($id);

        // Only allow update if user is Admin or owns the leave request
        if ($user->role != 'Admin' && $leave->user_id != $user->id) {
            return redirect()->route('leave.index')->with('error', 'Unauthorized action');
        }

        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'status' => 'required|string',
        ]);

        $leave->update([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
        ]);

        return redirect()->route('leave.index')->with('success', 'Leave request updated successfully');
    }

    public function destroy(Request $request, $id)
    {
        $user = $request->session()->get('username');

        if (!$user) {
            return redirect()->route('login')->with('info', 'Please login first');
        }

        $user = User::where('name', $user)->first();

        $leave = Leave::findOrFail($id);

        // Only allow delete if user is Admin or owns the leave request
        if ($user->role != 'Admin' && $leave->user_id != $user->id) {
            return redirect()->route('leave.index')->with('error', 'Unauthorized action');
        }

        $leave->delete();

        return redirect()->route('leave.index')->with('success', 'Leave request deleted successfully');
    }
}

