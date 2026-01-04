<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\PropertyType;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Show the dashboard page.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $categoryId = $request->get('category', 'all');
        
        $query = Project::where('status', 1)
            ->with(['thumbnail', 'projectCategory'])
            ->orderBy('id', 'desc');
        
        if ($categoryId !== 'all') {
            $query->where('project_category_id', $categoryId);
        }
        
        $projects = $query->take(6)->get();
        
        $totalProjects = $categoryId === 'all' 
            ? Project::where('status', 1)->count()
            : Project::where('status', 1)->where('project_category_id', $categoryId)->count();
        
        $hasMore = $totalProjects > 6;
        
        $categories = ProjectCategory::where('status', 1)->get();
        
        return view('website.project', compact('projects', 'hasMore', 'totalProjects', 'categories', 'categoryId'));
    }

    public function loadMore(Request $request)
    {
        $offset = $request->get('offset', 6);
        $limit = 6;
        $categoryId = $request->get('category', 'all');
        
        $query = Project::where('status', 1)
            ->with(['thumbnail', 'projectCategory'])
            ->orderBy('id', 'desc');
        
        if ($categoryId !== 'all') {
            $query->where('project_category_id', $categoryId);
        }
        
        $projects = $query->skip($offset)->take($limit)->get();
        
        $totalProjects = $categoryId === 'all' 
            ? Project::where('status', 1)->count()
            : Project::where('status', 1)->where('project_category_id', $categoryId)->count();
        
        $hasMore = ($offset + $limit) < $totalProjects;
        
        $html = '';
        foreach ($projects as $project) {
            $thumbnailUrl = $project->thumbnail ? $project->thumbnail->url : '/website/img/service.jpg';
            $projectUrl = route('project-details', $project->slug);
            $projectTitle = $project->title;
            
            $html .= '<div class="box-portfolio-item">
                <a href="' . $projectUrl . '">
                    <div class="portfolio-thumb" style="background-image: url(\'' . $thumbnailUrl . '\'); background-size: cover; background-position: center; min-height: 300px;">
                        <div class="portfolio-thumb__info">
                            <p class="portfolio-thumb__name">' . htmlspecialchars($projectTitle) . '</p>
                        </div>
                    </div>
                </a>
            </div>';
        }
        
        return response()->json([
            'html' => $html,
            'hasMore' => $hasMore,
            'nextOffset' => $offset + $limit
        ], 200, ['Content-Type' => 'application/json']);
    }
    public function show($slug)
    {    
       $project = Project::with(['thumbnail', 'sliderImages', 'projectCategory'])
           ->where('slug_ar',$slug)
           ->orWhere('slug_en',$slug)
           ->firstOrFail();

       // المشروع السابق (أقل من ID الحالي)
        $previousProject = Project::where('status', 1)
            ->where('id', '<', $project->id)
            ->orderBy('id', 'desc')
            ->first();

        // المشروع التالي (أكبر من ID الحالي)
        $nextProject = Project::where('status', 1)
            ->where('id', '>', $project->id)
            ->orderBy('id', 'asc')
            ->first();

        // 3 مشاريع أخرى للقسم Related Works
        $relatedProjects = Project::where('status', 1)
            ->where('id', '!=', $project->id)
            ->with(['thumbnail'])
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();

        return view('website.projectDetails',compact('project','previousProject','nextProject','relatedProjects'));

    }

}
