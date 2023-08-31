<?php
namespace App\Http\Controllers;

class ExamController extends Controller
{
    public function mltChoice() {
        return view('frontend.mltChoice_test');
    }

    public function essay() {
        return view('frontend.essay_test');
    }

    public function phrases() {
        return view('frontend.phrase');
    }

    public function news() {
        return view('frontend.news');
    }

    public function showMltChoice($name)
    {
        return view('frontend.mltChoice_test', compact('name'));
    }
}

?>