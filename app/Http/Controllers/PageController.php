<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function course(Course $course)
    {
        return view('course', compact('course'));
    }
}
