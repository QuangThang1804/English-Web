<?php
use Illuminate\Http\Request;
use App\Http\Controllers\ExamController;
use Illuminate\Support\Facades\Route;

Route::get('/mltChoice_test', [ExamController::class, 'mltChoice'] ) -> name('mltChoice_test');

Route::get('mltChoice_test/{name}', [ExamController::class, 'showMltChoice'] )->name('mltChoice_test.show');

Route::get('/essay_test', [ExamController::class, 'essay'] ) -> name('essay_test');

// Route::get('words/{id}', 'WordController@show');

// Route::get('/words', [WordController::class, 'index'] ) -> name('words');

// Route::get('/phrases', [WordController::class, 'index'] ) -> name('phrases');

// Route::get('/news', [WordController::class, 'index'] ) -> name('news');

?>