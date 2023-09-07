<?php
use Illuminate\Http\Request;
use App\Http\Controllers\CoursesController;
use Illuminate\Support\Facades\Route;

Route::get('/courses', [CoursesController::class, 'index'] ) -> name('courses');

Route::get('/words', [CoursesController::class, 'words'] ) -> name('words');

Route::get('/phrases', [CoursesController::class, 'phrases'] ) -> name('phrases');

Route::get('/news', [CoursesController::class, 'news'] ) -> name('news');

Route::get('words/{name}', [CoursesController::class, 'showContentWord'] )->name('words.show');

Route::get('phrases/{name}', [CoursesController::class, 'showContentPhrase'] )->name('phrases.show');

// Route::get('news/{id}/{level}', [CoursesController::class, 'showContentNews'] )->name('news.show');

Route::get('news/{id}', [CoursesController::class, 'showContentNews'] )->name('news.show');

Route::get('news/{id}/{level}', [CoursesController::class, 'showNewsLevel'] )->name('news.showLevel');





?>