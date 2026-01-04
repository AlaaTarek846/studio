<?php

namespace App\Http\Resources\Admin;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectCategoryResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            "id"    => $this->id,
            "title" => $this->title,
            "title_ar" => $this->title_ar,
            "title_en" => $this->title_en,
        ];
    }
}
