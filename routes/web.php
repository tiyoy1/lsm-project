<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\ContactMessageController;
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
    $latestNews = News::with('author')
        ->whereNotNull('published_at')
        ->where('published_at', '<=', now())
        ->orderByDesc('published_at')
        ->orderByDesc('id')
        ->take(4)
        ->get();

    return view('welcome', compact('latestNews'));
});
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');
Route::get('/visi-misi', [VisionMissionController::class, 'publicIndex'])->name('vision-mission');
Route::view('/sejarah', 'sejarah')->name('sejarah');
Route::view('/profile-sekolah', 'Profile')->name('Profile');
Route::view('/jurusan/akuntansi', 'majors.Akuntansi')->name('majors.akuntansi');
Route::view('/jurusan/pplg', 'majors.PPLG')->name('majors.pplg');
Route::view('/jurusan/dkv', 'majors.DKV')->name('majors.dkv');
Route::view('/jurusan/kuliner', 'majors.Kuliner')->name('majors.kuliner');
Route::view('/jurusan/hotel', 'majors.Hotel')->name('majors.hotel');
Route::view('/LPK', 'career.LPK')->name('LPK');
Route::view('/LKP', 'career.LKP')->name('LKP');
Route::get('/news', function (\Illuminate\Http\Request $request) {
    $search = trim((string) $request->query('q', ''));
    $query = News::with('author')
        ->whereNotNull('published_at')
        ->where('published_at', '<=', now());

    if ($search !== '') {
        $keywords = preg_split('/\s+/', $search, -1, PREG_SPLIT_NO_EMPTY);
        $query->where(function ($q) use ($keywords) {
            foreach ($keywords as $keyword) {
                $like = '%' . $keyword . '%';
                $q->where(function ($sub) use ($like) {
                    $sub->where('title', 'like', $like)
                        ->orWhere('title_en', 'like', $like)
                        ->orWhere('content', 'like', $like)
                        ->orWhere('content_en', 'like', $like);
                });
            }
        });
    }

    $latestNews = $query
        ->orderByDesc('published_at')
        ->orderByDesc('id')
        ->paginate(6)
        ->withQueryString();

    return view('news', compact('latestNews'));
})->name('news');
Route::view('/testi', 'testi')->name('testi');

Route::get('/language/{locale}', function (string $locale) {
    if (!in_array($locale, ['en', 'id'], true)) {
        abort(404);
    }

    session(['locale' => $locale]);

    return redirect()->back();
})->name('language.switch');

Route::get('/berita', [NewsController::class, 'publicIndex'])->name('news.index');
Route::get('/berita/{news:slug}', [NewsController::class, 'publicShow'])->name('news.show');
Route::get('/student-works', [StudentWorkController::class, 'publicIndex'])->name('student-works.index');
Route::get('/student-works/{studentWork:slug}', [StudentWorkController::class, 'publicShow'])->name('student-works.show');

Route::get('/dashboard', function () {
    return redirect()->to('/admin');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/ppdb', [RegistrationController::class, 'create'])->name('ppdb.create');
Route::post('/ppdb', [RegistrationController::class, 'store'])->name('ppdb.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Legacy admin routes (kept temporarily while migrating fully to Filament).
Route::middleware(['auth', 'admin'])->prefix('legacy-admin')->name('legacy-admin.')->group(function () {
    Route::get('panel', [AdminPanelController::class, 'index'])->name('panel');
    Route::resource('student', StudentController::class);
    Route::resource('pending-students', PendingStudentController::class)->only(['index', 'show', 'destroy']);
    Route::patch('pending-students/{pendingStudent}/status', [PendingStudentController::class, 'updateStatus'])
        ->name('pending-students.update-status');
    Route::resource('alumni', AlumniController::class);
    Route::resource('student-works', StudentWorkController::class);
    Route::resource('school-profile', SchoolProfileController::class)->except(['show']);
    Route::resource('vision-mission', VisionMissionController::class)->except(['show']);
    Route::resource('news', NewsController::class);
});

require __DIR__.'/auth.php';
