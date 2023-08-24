<?php
use Illuminate\Http\Request;
use App\Http\Controllers\CoursesController;
use Illuminate\Support\Facades\Route;

Route::get('/courses', [CoursesController::class, 'index'] ) -> name('courses');

Route::get('/words', [CoursesController::class, 'index'] ) -> name('words');

Route::get('/pharses', [CoursesController::class, 'index'] ) -> name('pharses');

Route::get('/news', [CoursesController::class, 'index'] ) -> name('news');

?>