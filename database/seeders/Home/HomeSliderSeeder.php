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
            'title_ar'       => "اكتشف موهبتك في التمثيل",
            'description_ar' => 'انضم إلى ورش التمثيل الاحترافية واكتشف عالم الفن والمسرح. نوفر لك بيئة إبداعية لتنمية موهبتك وتطوير مهاراتك التمثيلية مع أفضل المدربين المحترفين',
            'title_en'       => "Discover Your Acting Talent",
            'description_en' => 'Join our professional acting workshops and discover the world of art and theater. We provide you with a creative environment to develop your talent and enhance your acting skills with the best professional trainers',
            'status'         => 1,
        ]);

        $model->media()->create([
            'name' =>  $model['title_en'],
            'size' => 444,
            'mime_type' => 'sdd',
            'identifier' => 'background',
            'uploaded_by' =>  1,
            'url' => '/website/img/slider/slide1.png',
        ]);

        $model = HomeSlider::create([
            'title_ar'       => "طور مهاراتك التمثيلية معنا",
            'description_ar' => 'ورش متخصصة في التمثيل المسرحي والسينمائي. تعلم أساسيات التمثيل، تقنيات الأداء، والتحكم في الصوت والحركة. برامج تدريبية شاملة تناسب جميع المستويات من المبتدئين إلى المحترفين',
            'title_en'       => "Develop Your Acting Skills With Us",
            'description_en' => 'Specialized workshops in theater and film acting. Learn the basics of acting, performance techniques, and voice and movement control. Comprehensive training programs suitable for all levels from beginners to professionals',
            'status' => 1,
        ]);

        $model->media()->create([
            'name' =>  $model['title_en'],
            'size' => 444,
            'mime_type' => 'sdd',
            'identifier' => 'background',
            'uploaded_by' =>  1,
            'url' => '/website/img/slider/slide2.png',
        ]);



        $model = HomeSlider::create([
            'title_ar'       => "ابدأ رحلتك الفنية اليوم",
            'description_ar' => 'انطلق في رحلة فنية مميزة مع ورش التمثيل الأفضل. نوفر لك فرصة للتعلم من خبراء الصناعة، المشاركة في عروض مسرحية حقيقية، وبناء شبكة علاقات في عالم الفن والتمثيل',
            'title_en'       => "Start Your Artistic Journey Today",
            'description_en' => 'Embark on an exceptional artistic journey with the best acting workshops. We provide you with the opportunity to learn from industry experts, participate in real theatrical performances, and build a network in the world of art and acting',
            'status' => 1,
        ]);

        $model->media()->create([
            'name' =>  $model['title_en'],
            'size' => 444,
            'mime_type' => 'sdd',
            'identifier' => 'background',
            'uploaded_by' =>  1,
            'url' => '/website/img/slider/slide3.png',
        ]);


     }
}
