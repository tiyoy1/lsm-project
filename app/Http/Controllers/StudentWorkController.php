<?php

namespace App\Http\Controllers;

use App\Models\StudentWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentWorks = StudentWork::latest()->get();

        return view('admin.student_works.index', compact('studentWorks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.student_works.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'work_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'creator_name' => 'required|string|max:255',
            'created_date' => 'required|date',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('student-works', 'public');
        }

        StudentWork::create($validated);

        return redirect()->route('admin.student-works.index')->with('success', 'Student work created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentWork $studentWork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentWork $studentWork)
    {
        return view('admin.student_works.edit', compact('studentWork'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentWork $studentWork)
    {
        $validated = $request->validate([
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'work_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'creator_name' => 'required|string|max:255',
            'created_date' => 'required|date',
        ]);

        if ($request->hasFile('photo')) {
            if ($studentWork->photo) {
                Storage::disk('public')->delete($studentWork->photo);
            }
            $validated['photo'] = $request->file('photo')->store('student-works', 'public');
        }

        $studentWork->update($validated);

        return redirect()->route('admin.student-works.index')->with('success', 'Student work updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentWork $studentWork)
    {
        if ($studentWork->photo) {
            Storage::disk('public')->delete($studentWork->photo);
        }

        $studentWork->delete();

        return redirect()->route('admin.student-works.index')->with('success', 'Student work deleted successfully.');
    }
}
