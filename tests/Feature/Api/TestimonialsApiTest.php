<?php

namespace Tests\Feature\Api;

use App\Models\Testimonial;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TestimonialsApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_api_returns_only_approved_testimonials(): void
    {
        Testimonial::create([
            'name' => 'Approved User',
            'testimonial' => 'This is an approved testimonial that should be visible via API.',
            'rating' => 5,
            'is_approved' => true,
            'is_featured' => false,
        ]);

        Testimonial::create([
            'name' => 'Pending User',
            'testimonial' => 'This is a pending testimonial that should NOT be visible via API.',
            'rating' => 5,
            'is_approved' => false,
            'is_featured' => false,
        ]);

        $response = $this->getJson('/api/testimonials');

        $response->assertOk();
        $response->assertJsonCount(1, 'data');
        $response->assertJsonFragment(['name' => 'Approved User']);
        $response->assertJsonMissing(['name' => 'Pending User']);
    }

    public function test_api_can_filter_featured_only(): void
    {
        Testimonial::create([
            'name' => 'Featured User',
            'testimonial' => 'Featured and approved.',
            'rating' => 5,
            'is_approved' => true,
            'is_featured' => true,
        ]);

        Testimonial::create([
            'name' => 'Normal User',
            'testimonial' => 'Approved but not featured.',
            'rating' => 5,
            'is_approved' => true,
            'is_featured' => false,
        ]);

        $response = $this->getJson('/api/testimonials?featured_only=1');

        $response->assertOk();
        $response->assertJsonCount(1, 'data');
        $response->assertJsonFragment(['name' => 'Featured User']);
        $response->assertJsonMissing(['name' => 'Normal User']);
    }
}

