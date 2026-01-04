<?php

namespace Database\Seeders\Home;

use App\Models\Faq;
use App\Models\Service;
use App\Models\File;
use App\Models\ServiceFaq;
use Illuminate\Database\Seeder;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ProjectCategorises = [
            [
                'title_ar' => 'ورش التمثيل المسرحي',
                'title_en' => 'Theater Acting Workshops',
            ],
            [
                'title_ar' => 'ورش التمثيل السينمائي',
                'title_en' => 'Film Acting Workshops',
            ],
            [
                'title_ar' => 'ورش الإعداد والتحضير',
                'title_en' => 'Preparation & Training Workshops',
            ],
            [
                'title_ar' => 'ورش تقنيات الأداء',
                'title_en' => 'Performance Techniques Workshops',
            ],
            [
                'title_ar' => 'ورش التمثيل للمبتدئين',
                'title_en' => 'Beginner Acting Workshops',
            ],
            [
                'title_ar' => 'ورش التمثيل للمحترفين',
                'title_en' => 'Professional Acting Workshops',
            ],
        ];

        foreach ($ProjectCategorises as $ProjectCategory) {
            \App\Models\ProjectCategory::create($ProjectCategory);
        }

    }
}