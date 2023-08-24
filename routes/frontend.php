<?php
use Illuminate\Http\Request;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'] ) -> name('home');
?>