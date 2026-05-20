<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialApiController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $featuredOnly = $request->boolean('featured_only', false);

        $query = Testimonial::query()
            ->where('is_approved', true);

        if ($featuredOnly) {
            $query->where('is_featured', true);
        }

        $items = $query
            ->orderByDesc('is_featured')
            ->orderByDesc('id')
            ->get()
            ->map(function (Testimonial $t): array {
                return [
                    'name' => $t->name,
                    'photo_url' => filled($t->photo) ? Storage::disk('public')->url($t->photo) : null,
                    'program' => $t->program,
                    'current_job' => $t->current_job,
                    'company' => $t->company,
                    'testimonial' => $t->testimonial,
                    'rating' => (int) $t->rating,
                ];
            })
            ->values();

        return response()->json([
            'data' => $items,
        ]);
    }
}

