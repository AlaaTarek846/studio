<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\CounterSection;
use App\Models\Faq;
use App\Models\FaqSection;
use App\Models\HomeSlider;
use App\Models\OneAbout;
use App\Models\Partner;
use App\Models\Project;
use App\Models\PropertyType;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Show the dashboard page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $homeSliders = HomeSlider::get();
        $services = Service::whereStatus(1)->take(3)->get();
        $oneAbout = OneAbout::with(['details', 'firstPhoto', 'secondPhoto'])->first();
        $teams = Team::with('media')->get();
        $projects = Project::with('media')->whereStatus(1)->inRandomOrder()->limit(3)->get();
        $articles = Article::latest()->limit(3)->get();

        return view('website.home',compact('homeSliders','oneAbout','teams','articles','services','projects'));
    }

}
