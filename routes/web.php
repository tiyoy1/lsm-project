<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PendingStudentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SchoolProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentWorkController;
use App\Http\Controllers\VisionMissionController;
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
Route::get('/visi-misi', [VisionMissionController::class, 'publicIndex'])->name('vision-mission');

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
    return redirect()->route('admin.panel');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/ppdb', [RegistrationController::class, 'create'])->name('ppdb.create');
Route::post('/ppdb', [RegistrationController::class, 'store'])->name('ppdb.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('panel', [AdminPanelController::class, 'index'])->name('panel');
    Route::resource('student', StudentController::class);
    Route::resource('pending-students', PendingStudentController::class)->only(['index', 'show', 'destroy']);
    Route::patch('pending-students/{pendingStudent}/status', [PendingStudentController::class, 'updateStatus'])
        ->name('pending-students.update-status');
    Route::resource('alumni', AlumniController::class);
    Route::resource('ekskuls', EkskulController::class);
    Route::resource('student-works', StudentWorkController::class);
    Route::resource('majors', MajorController::class);
    Route::resource('school-profile', SchoolProfileController::class)->except(['show']);
    Route::resource('vision-mission', VisionMissionController::class)->except(['show']);
    Route::resource('organizations', OrganizationController::class);
    Route::resource('news', NewsController::class);
});

require __DIR__.'/auth.php';
