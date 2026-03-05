<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Student;
use Illuminate\Http\Request;

class PendingStudentController extends Controller
{
    /**
     * Display pending students.
     */
    public function index()
    {
        $pendingStudents = Registration::where('status', 'pending')->latest()->get();

        return view('admin.pending_students.index', compact('pendingStudents'));
    }

    /**
     * Show pending student detail.
     */
    public function show(Registration $pendingStudent)
    {
        return view('admin.pending_students.show', compact('pendingStudent'));
    }

    /**
     * Update pending student status.
     */
    public function updateStatus(Request $request, Registration $pendingStudent)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,accepted,rejected',
        ]);

        $pendingStudent->update($validated);

        if ($validated['status'] === 'accepted') {
            Student::updateOrCreate(
                ['email' => $pendingStudent->email],
                [
                    'full_name' => $pendingStudent->full_name,
                    'birth_date' => $pendingStudent->birth_date,
                    'gender' => $pendingStudent->gender,
                    'address' => $pendingStudent->address,
                    'phone' => $pendingStudent->phone,
                ]
            );
        }

        return redirect()->route('admin.pending-students.index')->with('success', 'Status pendaftar berhasil diperbarui.');
    }

    /**
     * Remove pending student data.
     */
    public function destroy(Registration $pendingStudent)
    {
        $pendingStudent->delete();

        return redirect()->route('admin.pending-students.index')->with('success', 'Data pendaftar berhasil dihapus.');
    }
}
