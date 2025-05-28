<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\QuizController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/chapters/{level_id}', [ChapterController::class, 'index'])->name('chapters.index');
Route::get('/quiz/{chapter_id}', [QuizController::class, 'show'])->name('quiz.show');
Route::post('/quiz/{chapter_id}/submit', [QuizController::class, 'submitAnswer'])->name('quiz.submit');
Route::get('/results/{level_id}', [QuizController::class, 'results'])->name('results');
