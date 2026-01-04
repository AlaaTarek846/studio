<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceVideoRequest;
use App\Http\Resources\Admin\ServiceVideoResource;
use App\Models\ServiceVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ServiceVideoController extends Controller
{
    public function index(Request $request)
    {
        $serviceId = $request->get('service_id');
        $query = ServiceVideo::with('thumbnail');
        
        if ($serviceId) {
            $query->where('service_id', $serviceId);
        }
        
        $videos = $query->paginate(10);
        return responseJson(ServiceVideoResource::collection($videos->items()),'',200,getPaginates($videos));
    }

    public function store(ServiceVideoRequest $request)
    {
        $video = ServiceVideo::create(Arr::except($request->validated(), ['thumbnail']));
        if ($request->hasFile('thumbnail')) {
            saveFiles($request->thumbnail, $video, "service-video", "thumbnail");
        }
        return responseJson(new ServiceVideoResource($video->load('thumbnail')),'Created Successfully',200);
    }

    public function show($id)
    {
        $video = ServiceVideo::with('thumbnail')->findOrFail($id);
        return responseJson(new ServiceVideoResource($video),'Data exited successfully',200);
    }

    public function update(ServiceVideoRequest $request, ServiceVideo $serviceVideo)
    {
        if ($request->hasFile('thumbnail')) {
            saveFiles($request->thumbnail, $serviceVideo, "service-video", "thumbnail", 'update');
        }
        $serviceVideo->update(Arr::except($request->validated(), ['thumbnail']));
        return responseJson([],'Updated Successfully',200);
    }

    public function destroy(ServiceVideo $serviceVideo)
    {
        deleteFile($serviceVideo, 'thumbnail');
        $serviceVideo->delete();
        return responseJson([],'Deleted Successfully',200);
    }
}
