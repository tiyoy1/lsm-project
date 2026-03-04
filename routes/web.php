<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentWorkController;
use App\Models\News;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $publishedNews = News::with('author')
        ->whereNotNull('published_at')
        ->where('published_at', '<=', now());

    $latestNews = ($publishedNews->exists() ? $publishedNews : News::with('author'))
        ->orderByDesc('published_at')
        ->orderByDesc('id')
        ->take(4)
        ->get();

    return view('welcome', compact('latestNews'));
});

Route::get('/language/{locale}', function (string $locale) {
    if (!in_array($locale, ['en', 'id'], true)) {
        abort(404);
    }

    session(['locale' => $locale]);

    return redirect()->back();
})->name('language.switch');

Route::get('/news', [NewsController::class, 'publicIndex'])->name('news.index');
Route::get('/news/{news:slug}', [NewsController::class, 'publicShow'])->name('news.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/register_student', RegistrationController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::view('panel', 'admin.panel')->name('panel');
    Route::resource('student', StudentController::class);
    Route::resource('student-works', StudentWorkController::class);
    Route::resource('organizations', OrganizationController::class);
    Route::resource('news', NewsController::class);
});

require __DIR__.'/auth.php';
