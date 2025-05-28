<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\QuizController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/chapters/{level_id}', [ChapterController::class, 'index'])->name('chapters.index');
Route::get('/quiz/{chapter_id}', [QuizController::class, 'show'])->name('quiz.show');
Route::post('/quiz/{chapter_id}/submit', [QuizController::class, 'submitAnswer'])->name('quiz.submit');
Route::get('/results/{level_id}', [QuizController::class, 'results'])->name('results');

require __DIR__.'/auth.php';
