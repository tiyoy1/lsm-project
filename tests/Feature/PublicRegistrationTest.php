<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicRegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_ppdb_form_stores_full_payload(): void
    {
        $payload = [
            'full_name' => 'John Smith',
            'birth_date' => '2008-01-01',
            'gender' => 'Male',
            'last_school' => 'SMP Negeri 1',
            'address' => 'Jl. Contoh No. 123',
            'majors' => 'Digital Development',
            'country' => 'Japan',
            'phone' => '08123456789',
            'email' => 'john.smith@example.com',
            'reason' => 'I want to learn skills for an international career.',
        ];

        $response = $this->post('/ppdb', $payload);

        $response->assertRedirect('/ppdb');
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('registrations', [
            'full_name' => $payload['full_name'],
            'email' => $payload['email'],
            'last_school' => $payload['last_school'],
            'majors' => $payload['majors'],
            'country' => $payload['country'],
            'status' => 'pending',
        ]);
    }
}

