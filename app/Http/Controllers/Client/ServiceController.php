<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\CounterSection;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Show the dashboard page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $services = Service::with(['image','icon'])->whereStatus(1)->get();
        $clients = Client::with('media')->whereStatus(1)->get();

        return view('website.service',compact('services', 'clients'));
    }

    public function show($slug)
    {
        $service = Service::with(['image', 'icon', 'video.thumbnail', 'serviceFaqs' => function($query) {
            $query->where('status', 1)->orderBy('sort', 'asc');
        }])->where('slug_ar',$slug)->orWhere('slug_en',$slug)->firstOrFail();
        $allServices = Service::with('icon')->whereStatus(1)->where('id', '!=', $service->id)->get();
        // 3 مشاريع أخرى للقسم Related Works
        $relatedProjects = Project::where('status', 1)
            ->with(['thumbnail'])
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();
        return view('website.serviceDetails',compact('service','allServices','relatedProjects'));

    }

}
