<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\CounterAbout;
use App\Models\CounterSection;
use App\Models\OneAbout;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\TwoAbout;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
class AboutController extends Controller
{
    /**
     * Show the dashboard page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $teams = Team::with('media')->get();
        $oneAbout = OneAbout::with(['details', 'firstPhoto', 'secondPhoto'])->first();
        $testimonials = Testimonial::with('media')->whereStatus(1)->get();
        $clients = Client::with('media')->whereStatus(1)->get();
        $setting = Setting::first();
        return view('website.about',compact('teams','oneAbout','clients','testimonials','setting'));
    }

}
