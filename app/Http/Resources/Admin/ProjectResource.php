<?php

namespace App\Http\Resources\Admin;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            "id"         => $this->id,
            "title"      => $this->title,
            "title_ar"   => $this->title_ar,
            "title_en"   => $this->title_en,
            "description"=> $this->description,
            "description_ar" => $this->description_ar,
            "description_en" => $this->description_en,
            "slug_ar"    => $this->slug_ar,
            "slug_en"    => $this->slug_en,
            "project_category_id" => $this->project_category_id,
            "project_category" => new ProjectCategoryResource($this->whenLoaded('projectCategory')),
            "thumbnail"  => $this->thumbnail,
            "slider_images" => $this->sliderImages,
            "status"     => $this->status,
        ];
    }
}
