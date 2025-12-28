<?php

namespace Database\Seeders\Home;

use App\Models\HomeSlider;
use Illuminate\Database\Seeder;

class HomeSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeSlider::truncate();

        $model = HomeSlider::create([
            'title_ar'       => "تجاوز البقية مع  ",
            'title_color_ar' => "الأسقف  المبتكرة",
            'description_ar' => 'نحن نعمل منذ أكثر من عقد من الزمن، نقدم خدمات عالية الجودة لعملائنا ونبني سجلًا قويًا في الصناعة. لقد كنا نعمل منذ أكثر من عقد من الزمن، نقدم خدمات عالية الجودة',
            'title_en'       => "Rise Above the  Rest is with Our  Roofing",
            'title_color_en' => "Innovation at Work",
            'description_en' => 'We have been operating for over a decade, providing top-notch servicesto our clients and building a strong track record in the industry.We havebeen operating for over a decade, providing top-notch',
            'status'         => 1,
        ]);

        $model->media()->create([
            'name' =>  $model['title_en'],
            'size' => 444,
            'mime_type' => 'sdd',
            'identifier' => 'background',
            'uploaded_by' =>  1,
            'url' => '/storage/home-slider/1.jpg',
        ]);

        $model = HomeSlider::create([
            'title_ar'       => "تجاوز البقية مع  ",
            'title_color_ar' => "الأسقف  المبتكرة",
            'description_ar' => 'نحن نعمل منذ أكثر من عقد من الزمن، نقدم خدمات عالية الجودة لعملائنا ونبني سجلًا قويًا في الصناعة. لقد كنا نعمل منذ أكثر من عقد من الزمن، نقدم خدمات عالية الجودة',
            'title_en'       => "Rise Above the  Rest is with Our  Roofing",
            'title_color_en' => "Innovation at Work",
            'description_en' => 'We have been operating for over a decade, providing top-notch servicesto our clients and building a strong track record in the industry.We havebeen operating for over a decade, providing top-notch',
            'status' => 1,
        ]);

        $model->media()->create([
            'name' =>  $model['title_en'],
            'size' => 444,
            'mime_type' => 'sdd',
            'identifier' => 'background',
            'uploaded_by' =>  1,
            'url' => '/storage/home-slider/2.jpg',
        ]);



        $model = HomeSlider::create([
            'title_ar'       => "تجاوز البقية مع  ",
            'title_color_ar' => "الأسقف  المبتكرة",
            'description_ar' => 'نحن نعمل منذ أكثر من عقد من الزمن، نقدم خدمات عالية الجودة لعملائنا ونبني سجلًا قويًا في الصناعة. لقد كنا نعمل منذ أكثر من عقد من الزمن، نقدم خدمات عالية الجودة',
            'title_en'       => "Rise Above the  Rest is with Our  Roofing",
            'title_color_en' => "Innovation at Work",
            'description_en' => 'We have been operating for over a decade, providing top-notch servicesto our clients and building a strong track record in the industry.We havebeen operating for over a decade, providing top-notch',
            'status' => 1,
        ]);

        $model->media()->create([
            'name' =>  $model['title_en'],
            'size' => 444,
            'mime_type' => 'sdd',
            'identifier' => 'background',
            'uploaded_by' =>  1,
            'url' => '/storage/home-slider/3.jpg',
        ]);


     }
}
