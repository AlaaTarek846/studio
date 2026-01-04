<?php

namespace App\Models;

use App\Traits\TranslationsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, TranslationsTrait, Sluggable;

    protected $guarded = ['id'];


    public function getTitleAttribute()
    {
        return app()->getLocale() == 'ar' ? $this->title_ar : $this->title_en;
    }

    public function getDescriptionAttribute()
    {
        return app()->getLocale() == 'ar' ? $this->description_ar : $this->description_en;
    }

     public function getSlugAttribute()
    {
        return app()->getLocale() == 'ar' ? $this->slug_ar  : $this->slug_en;
    }

    public function getChallengeAttribute()
    {
        return app()->getLocale() == 'ar' ? $this->challenge_ar  : $this->challenge_en;
    }

    public function getOverviewAttribute()
    {
        return app()->getLocale() == 'ar' ? $this->overview_ar  : $this->overview_en;
    }
    public function getCountryAttribute()
    {
        return app()->getLocale() == 'ar' ? $this->country_ar  : $this->country_en;
    }

    public function sluggable(): array
    {
        return [
            'slug_ar' => [
                'source' => 'title_ar'
            ],
            'slug_en' => [
                'source' => 'title_en'
            ]
        ];
    }

    public function media()
    {
        return $this->morphMany(File::class, 'uploadable');
    }

    public function thumbnail()
    {
        return $this->morphOne(File::class, 'uploadable')->where('identifier', 'thumbnail');
    }

    public function sliderImages()
    {
        return $this->morphMany(File::class, 'uploadable')->where('identifier', 'slider');
    }

    public function projectCategory()
    {
        return $this->belongsTo(ProjectCategory::class, 'project_category_id');
    }
    public function projectChallengeSolutions()
    {
        return $this->hasMany(ProjectChallengeSolution::class,'project_id');
    }

}