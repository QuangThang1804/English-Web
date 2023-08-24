<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require_once 'frontend.php';

use App\Http\Controllers\CoursesController;

Route::get('/courses', [CoursesController::class, 'index'] ) -> name('courses');

Route::get('/words', [CoursesController::class, 'words'] ) -> name('words');

Route::get('/pharses', [CoursesController::class, 'pharses'] ) -> name('pharses');

Route::get('/news', [CoursesController::class, 'news'] ) -> name('news');

