<?php
namespace App\Http\Controllers;

class CoursesController extends Controller
{
    public function index()
    {
        return view('frontend.courses');
    }

    public function words()
    {
        return view('frontend.word');
    }

    public function phrases()
    {
        return view('frontend.phrase');
    }

    public function news()
    {
        return view('frontend.news');
    }

    public function showContentWord($name)
    {
        return view('frontend.words.wordContent', compact('name'));
    }

    public function showContentPhrase($name)
    {
        return view('frontend.phrases.phraseContent', compact('name'));
    }

    // public function showContentNews($id, $level)
    // {
    //     return view('frontend.news.newsContent', compact('id', 'level'));
    // }

    public function showContentNews($id)
    {
        return view('frontend.news.newsContent', compact('id'));
    }

    public function showNewsLevel($id,$level) {
        return view('frontend.news.newsContent', compact('id','level'));
    }
}

?>