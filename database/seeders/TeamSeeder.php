<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\Partner;
use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::truncate();

        $teams = [
            [
                'name_ar' => "أحمد محمود",
                'name_en' => "Ahmed Mahmoud",
                'job_ar' => "مدرب تمثيل رئيسي",
                'job_en' => "Lead Acting Coach",
                'url' => '/website/img/team/photo1.png',
            ],
            [
                'name_ar' => "سارة علي",
                'name_en' => "Sara Ali",
                'job_ar' => "مدربة تمثيل مسرحي",
                'job_en' => "Theater Acting Coach",
                'url' => '/website/img/team/photo2.png',
            ],
            [
                'name_ar' => "محمد حسن",
                'name_en' => "Mohamed Hassan",
                'job_ar' => "مدرب إعداد الممثل",
                'job_en' => "Actor Preparation Coach",
                'url' => '/website/img/team/photo3.png',
            ],
            [
                'name_ar' => "فاطمة إبراهيم",
                'name_en' => "Fatima Ibrahim",
                'job_ar' => "مدربة تمثيل سينمائي",
                'job_en' => "Cinematic Acting Coach",
                'url' => '/website/img/team/photo4.png',
            ],
            [
                'name_ar' => "خالد عبدالله",
                'name_en' => "Khaled Abdullah",
                'job_ar' => "مدرب تمثيل متقدم",
                'job_en' => "Advanced Acting Coach",
                'url' => '/website/img/team/photo5.png',
            ],
        ];

        foreach ($teams as $team) {
            $model = Team::create([
                'name_ar' => $team['name_ar'],
                'name_en' => $team['name_en'],
                'job_ar' => $team['job_ar'],
                'job_en' => $team['job_en'],
            ]);
            $model->media()->create([
                'name' =>  $team['name_en'],
                'size' => 444,
                'mime_type' => 'image/png',
                'identifier' => null,
                'uploaded_by' =>  1,
                'url' => $team['url'],
            ]);
        }

    }
}