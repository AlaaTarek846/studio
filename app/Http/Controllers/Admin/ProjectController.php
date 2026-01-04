<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectRequest;
use App\Http\Resources\Admin\ProjectResource;
use App\Models\Project;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function indexPage(Request $request): View
    {
        return view('admin.projects.index');
    }

    public function index(Request $request)
    {
        $projects = Project::with(['thumbnail','sliderImages','projectCategory'])->paginate(10);
        return responseJson(ProjectResource::collection($projects->items()),'',200,getPaginates($projects));
    }

    public function store(ProjectRequest $request)
    {
        $project = Project::create(Arr::except($request->validated(),['thumbnail','slider']));
        
        // Save thumbnail
        if ($request->hasFile('thumbnail')) {
            saveFiles($request->thumbnail, $project, "project", 'thumbnail');
        }
        
        // Save slider images
        if ($request->hasFile('slider')) {
            saveFiles($request->slider, $project, "project", 'slider');
        }
        
        return responseJson([],'Created Successfully',200);
    }

    public function show($id)
    {
        $project = Project::with(['thumbnail','sliderImages','projectCategory'])->find($id);
        if (!$project) {
            return responseJson([],'Data not found',404);
        }
        return responseJson(new ProjectResource($project),'Data exited successfully',200);
    }

    public function update(ProjectRequest $request, Project $project)
    {
        // Update thumbnail
        if ($request->hasFile('thumbnail')) {
            saveFiles($request->thumbnail, $project, "project", 'thumbnail', 'update');
        }
        
        // Update slider images
        if ($request->hasFile('slider')) {
            saveFiles($request->slider, $project, "project", 'slider');
        }

        $project->update(Arr::except($request->validated(),['thumbnail','slider']));
        return responseJson([],'Updated Successfully',200);
    }

    public function destroy(Project $project)
    {
        deleteFile($project);
        $project->delete();
        return responseJson([],'Deleted Successfully',200);
    }

    public function dropdown( )
    {
        $projects = Project::all();
        return responseJson($projects,'Data exited successfully',200);
    }

    public function deleteSliderImage($projectId, $imageId)
    {
        $project = Project::find($projectId);
        if (!$project) {
            return responseJson([],'Project not found',404);
        }

        $image = \App\Models\File::where('id', $imageId)
            ->where('uploadable_id', $projectId)
            ->where('uploadable_type', Project::class)
            ->where('identifier', 'slider')
            ->first();

        if (!$image) {
            return responseJson([],'Image not found',404);
        }

        unlink_image_by_path($image->url);
        $image->delete();
        
        return responseJson([],'Image deleted successfully',200);
    }
}
