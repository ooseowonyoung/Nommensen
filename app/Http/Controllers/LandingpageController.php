<?php

namespace App\Http\Controllers;

use App\Models\Aboutme;
use App\Models\Announcement;
use App\Models\Footer;
use App\Models\History;
use App\Models\Lecture;
use App\Models\News;
use App\Models\Rektor;
use App\Models\Student;
use App\Models\Visimisi;

class LandingpageController extends Controller
{
    public function index()
    {
        $footer       = Footer::first();
        $announcements = Announcement::latest()->take(3)->get();
        $news         = News::latest()->take(3)->get();
        $lectures     = Lecture::take(4)->get();
        $rektors      = Rektor::all();

        return view('landingpage', compact(
            'footer', 'announcements', 'news', 'lectures', 'rektors'
        ));
    }

    public function profile()
    {
        $footer  = Footer::first();
        $aboutme = Aboutme::first();
        $history = History::first();
        $visimisi = Visimisi::first();
        $rektors = Rektor::all();

        return view('profile', compact(
            'footer', 'aboutme', 'history', 'visimisi', 'rektors'
        ));
    }

    public function lectures()
    {
        $footer   = Footer::first();
        $lectures = Lecture::all();

        return view('lectures', compact('footer', 'lectures'));
    }

    public function students()
    {
        $footer   = Footer::first();
        $students = Student::all();

        return view('students', compact('footer', 'students'));
    }

    public function announcements()
    {
        $footer        = Footer::first();
        $announcements = Announcement::latest()->get();

        return view('announcements', compact('footer', 'announcements'));
    }

    public function news()
    {
        $footer = Footer::first();
        $news   = News::latest()->get();

        return view('news', compact('footer', 'news'));
    }
}