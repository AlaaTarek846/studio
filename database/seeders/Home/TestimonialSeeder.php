<?php

namespace Database\Seeders\Home;

use App\Models\HomeSlider;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Testimonial::truncate();

        $testimonials = [
            [
                'name_ar' => "مريم أحمد",
                'name_en' => "Mariam Ahmed",
                'description_ar' => 'ورش التمثيل كانت تجربة رائعة! تعلمت الكثير من التقنيات الاحترافية وأصبحت أكثر ثقة في أدائي. المدربون محترفون جداً والجو العام ملهم.',
                'description_en' => 'The acting workshops were an amazing experience! I learned so many professional techniques and became much more confident in my performance. The trainers are very professional and the overall atmosphere is inspiring.',
                'status' => 1,
                'job_ar' => 'ممثلة مسرحية',
                'job_en' => 'Theater Actress',
                'url' => '/website/img/paul.jpg',
            ],
            [
                'name_ar' => "يوسف محمد",
                'name_en' => "Youssef Mohamed",
                'description_ar' => 'أفضل استثمار في مسيرتي الفنية. الورشة ساعدتني على تطوير مهاراتي في التمثيل السينمائي واكتشاف جوانب جديدة من موهبتي. أنصح بها بشدة.',
                'description_en' => 'The best investment in my artistic career. The workshop helped me develop my cinematic acting skills and discover new aspects of my talent. I highly recommend it.',
                'status' => 1,
                'job_ar' => 'ممثل سينمائي',
                'job_en' => 'Cinematic Actor',
                'url' => '/website/img/paul.jpg',
            ],
            [
                'name_ar' => "فاطمة علي",
                'name_en' => "Fatima Ali",
                'description_ar' => 'تجربة لا تُنسى! تعلمت كيفية التحكم في مشاعري والتعبير عنها بشكل احترافي. البرنامج شامل ومنظم بشكل ممتاز.',
                'description_en' => 'An unforgettable experience! I learned how to control my emotions and express them professionally. The program is comprehensive and excellently organized.',
                'status' => 1,
                'job_ar' => 'ممثلة تلفزيونية',
                'job_en' => 'TV Actress',
                'url' => '/website/img/paul.jpg',
            ],
            [
                'name_ar' => "أحمد خالد",
                'name_en' => "Ahmed Khaled",
                'description_ar' => 'ورشة ممتازة ساعدتني على تطوير مهاراتي في التمثيل المسرحي. المدربون يقدمون محتوى قيماً وتجربة تعليمية فريدة.',
                'description_en' => 'Excellent workshop that helped me develop my theater acting skills. The trainers provide valuable content and a unique learning experience.',
                'status' => 1,
                'job_ar' => 'ممثل مسرحي',
                'job_en' => 'Theater Actor',
                'url' => '/website/img/paul.jpg',
            ],
            [
                'name_ar' => "سارة محمود",
                'name_en' => "Sara Mahmoud",
                'description_ar' => 'تجربة رائعة! تعلمت تقنيات متقدمة في التمثيل وأصبحت أكثر قدرة على التعبير عن مشاعري. أنصح بها لكل من يريد تطوير موهبته.',
                'description_en' => 'Amazing experience! I learned advanced acting techniques and became more capable of expressing my emotions. I recommend it to anyone who wants to develop their talent.',
                'status' => 1,
                'job_ar' => 'ممثلة',
                'job_en' => 'Actress',
                'url' => '/website/img/paul.jpg',
            ],
        ];

        foreach ($testimonials as $testimonial) {
            $model = Testimonial::create([
                'name_ar' => $testimonial['name_ar'],
                'name_en' => $testimonial['name_en'],
                'description_ar' => $testimonial['description_ar'],
                'description_en' => $testimonial['description_en'],
                'status' => $testimonial['status'],
                'job_ar' => $testimonial['job_ar'],
                'job_en' => $testimonial['job_en'],
            ]);

            $model->media()->create([
                'name' =>  $testimonial['name_en'],
                'size' => 444,
                'mime_type' => 'image/jpg',
                'identifier' => null,
                'uploaded_by' =>  1,
                'url' => $testimonial['url'],
            ]);
        }

     }
}
