<?php

namespace App\Http\Resources\Admin;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceVideoResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "service_id" => $this->service_id,
            "youtube_url" => $this->youtube_url,
            "title_ar" => $this->title_ar,
            "title_en" => $this->title_en,
            "description_ar" => $this->description_ar,
            "description_en" => $this->description_en,
            "thumbnail" => $this->thumbnail,
            "status" => $this->status,
        ];
    }
}
