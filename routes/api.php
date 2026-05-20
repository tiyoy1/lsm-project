<?php

use App\Http\Controllers\Api\TestimonialApiController;
use Illuminate\Support\Facades\Route;

Route::get('/testimonials', [TestimonialApiController::class, 'index']);

