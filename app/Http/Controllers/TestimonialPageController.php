<?php

namespace App\Http\Controllers;

use App\Models\ContactSetting;
use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TestimonialPageController extends Controller
{
    public function index(): View
    {
        $contactSetting = ContactSetting::query()->latest('id')->first();

        $testimonials = Testimonial::query()
            ->where('is_approved', true)
            ->orderByDesc('is_featured')
            ->orderByDesc('id')
            ->get();

        return view('testi', compact('testimonials', 'contactSetting'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'photo' => ['nullable', 'image', 'max:4096'],
            'program' => ['nullable', 'string', 'max:255'],
            'current_job' => ['nullable', 'string', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'testimonial' => ['required', 'string', 'min:20', 'max:4000'],
            'rating' => ['required', 'integer', 'min:1', 'max:5'],
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('testimonials', 'public');
        }

        // Alumni submissions are always pending approval.
        Testimonial::create([
            'name' => $validated['name'],
            'photo' => $photoPath,
            'program' => $validated['program'] ?? null,
            'current_job' => $validated['current_job'] ?? null,
            'company' => $validated['company'] ?? null,
            'testimonial' => $validated['testimonial'],
            'rating' => (int) $validated['rating'],
            'is_approved' => false,
            'is_featured' => false,
        ]);

        return back()
            ->withInput([])
            ->with('testimonial_success', 'Terima kasih! Testimoni kamu sudah terkirim dan akan ditinjau admin.');
    }
}

