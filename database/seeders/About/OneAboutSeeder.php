<?php

namespace Database\Seeders\About;

use App\Models\AboutDetail;
use App\Models\OneAbout;
use Illuminate\Database\Seeder;

class OneAboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $model = OneAbout::create([
            'title_ar' => "ورش التمثيل",
            'title_color_ar' => "مهمتنا ورؤيتنا",
            'description_ar' => 'نقدم ورش تمثيل احترافية لتطوير مهاراتك الفنية والإبداعية. اكتشف موهبتك وطور قدراتك في التمثيل من خلال برامج تدريبية شاملة تحت إشراف خبراء في المجال. نحن نؤمن بأن كل شخص لديه موهبة فريدة في التمثيل، وهدفنا هو مساعدتك على اكتشافها وتطويرها. من خلال ورشنا المتنوعة، ستتعلم تقنيات التمثيل الأساسية والمتقدمة، كيفية التحكم في مشاعرك والتعبير عنها بشكل احترافي، وأساليب إعداد الممثل للسينما والمسرح والتلفزيون. فريقنا من المدربين المحترفين يقدمون تجربة تعليمية فريدة تجمع بين النظرية والتطبيق العملي، مما يضمن لك تطوير مهاراتك بشكل شامل ومتكامل.',
            'title_en' => "Acting Workshops",
            'title_color_en' => "Our mission & vision",
            'description_en' => 'We offer professional acting workshops to develop your artistic and creative skills. Discover your talent and enhance your acting abilities through comprehensive training programs supervised by industry experts. We believe that everyone has a unique acting talent, and our goal is to help you discover and develop it. Through our diverse workshops, you will learn basic and advanced acting techniques, how to control and express your emotions professionally, and methods of actor preparation for cinema, theater, and television. Our team of professional trainers provides a unique educational experience that combines theory and practical application, ensuring comprehensive and integrated skill development.',
            'years_of_experience' => 15,
        ]);

        $aboutDetail1 = AboutDetail::create([
            'one_about_id' => $model->id,
            'title_ar' =>  "ورش تمثيل للمبتدئين",
            'title_en' => "Beginner Acting Workshops",
            'count' => 15,
        ]);
        $aboutDetail2 = AboutDetail::create([
            'one_about_id' => $model->id,
            'title_ar' => "ورش تمثيل متقدمة",
            'title_en' => "Advanced Acting Workshops",
            'count' => 8,
        ]);

        $aboutDetail3 = AboutDetail::create([
            'one_about_id' => $model->id,
            'title_ar' => "ورش إعداد الممثل",
            'title_en' => "Actor Preparation Workshops",
            'count' => 12,
        ]);

        $aboutDetail4 = AboutDetail::create([
            'one_about_id' => $model->id,
            'title_ar' => "ورش التمثيل المسرحي",
            'title_en' => "Theater Acting Workshops",
            'count' => 10,
        ]);

        $model->media()->create([
            'name' =>  'first_photo',
            'size' => 444,
            'mime_type' => 'img.jpg',
            'identifier' => 'first_photo',
            'uploaded_by' =>  1,
            'url' => '/website/img/about1.png',
        ]);

        $model->media()->create([
            'name' =>  'second_photo',
            'size' => 444,
            'mime_type' => 'img.jpg',
            'identifier' => 'second_photo',
            'uploaded_by' =>  1,
            'url' => '/website/img/about2.png',
        ]);

    }
}