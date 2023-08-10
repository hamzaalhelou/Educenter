<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Event;
use App\Models\Feature;
use App\Models\Journalist;
use App\Models\Research;
use App\Models\Slider;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest('id')->get();
        $sliderse = Slider::latest('id')->get();
        $teachers = Teacher::latest('id')->get();
        $events = Event::latest('id')->get();
        $features = Feature::latest('id')->get();
        $courses = Course::latest('id')->get();
        $journalists = Journalist::latest('id')->get();
        return view('site.index',compact('sliders','teachers','events','courses','journalists','features','sliderse'));
    }
    public function about()
    {
        $teachers = Teacher::latest('id')->get();
        return view('site.about',compact('teachers'));
    }
    public function courses()
    {
        return view('site.courses');
    }
    public function events()
    {
        return view('site.events');
    }
    public function blog()
    {
        return view('site.blog');
    }
    public function contact()
    {
        return view('site.contact');
    }
    public function research()
    {
        $researchs = Research::latest('id')->get();
        return view('site.research',compact('researchs'));
    }
    public function course_single()
    {
        return view('site.course-single');
    }
}
