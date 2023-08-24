<?php
namespace App\Http\Controllers;

class CoursesController extends Controller
{
    public function index() {
        return view('frontend.courses');
    }

    public function words() {
        return view('frontend.word');
    }

    public function pharses() {
        return view('frontend.pharse');
    }

    public function news() {
        return view('frontend.news');
    }
}

?>