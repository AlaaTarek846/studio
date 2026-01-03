<?php

namespace App\Http\Resources\Admin;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class HomeSliderResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            "id"  => $this->id,
            "title"     => $this->title,
            "title_ar"  => $this->title_ar,
            "title_en"  => $this->title_en,
            "description"     => $this->description,
            "description_ar"   => $this->description_ar,
            "description_en"  => $this->description_en,
            "media"     => $this->media,
            "background" => $this->background,
            "status" => $this->status,
        ];
    }
}
