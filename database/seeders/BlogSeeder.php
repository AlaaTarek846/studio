<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\File;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'title_ar' => 'ورش التمثيل',
                'title_en' => 'Acting Workshops',
            ],
            [
                'title_ar' => 'تقنيات التمثيل',
                'title_en' => 'Acting Techniques',
            ],
            [
                'title_ar' => 'الإعداد المسرحي',
                'title_en' => 'Theater Preparation',
            ],
            [
                'title_ar' => 'نصائح للممثلين',
                'title_en' => 'Tips for Actors',
            ],
            [
                'title_ar' => 'أخبار ورش التمثيل',
                'title_en' => 'Workshop News',
            ],
        ];


        $articles = [
            [
                "title_ar" => "كيف تبدأ رحلتك في عالم التمثيل",
                "title_en" => "How to Start Your Journey in Acting",
                "slug_ar" => "كيف-تبدأ-رحلتك-في-عالم-التمثيل",
                "slug_en" => "how-to-start-your-journey-in-acting",
                "content_ar" => "التمثيل فن يحتاج إلى شغف وتدريب مستمر. في ورش التمثيل، نقدم لك الأساسيات التي تحتاجها للبدء في هذا المجال الرائع. من خلال التدريب العملي والتمارين التفاعلية، ستتعلم كيفية التعبير عن المشاعر والتواصل مع الجمهور بشكل فعال.",
                "content_en" => "Acting is an art that requires passion and continuous training. In our acting workshops, we provide you with the fundamentals you need to start in this wonderful field. Through practical training and interactive exercises, you will learn how to express emotions and communicate with the audience effectively.",
                "category_id" => 1,
                'media' => [
                    [
                        'name'            => 'Acting Workshop 1',
                        'mime_type'       => 'image/png',
                        'uploaded_by'     => 1,
                        'size'	          => 50000,
                        'uploadable_type' => Article::class,
                        'url'             => '/website/img/blog/post1.png'
                    ]
                ]
            ],
            [
                "title_ar" => "تقنيات التمثيل المسرحي الأساسية",
                "title_en" => "Basic Theater Acting Techniques",
                "slug_ar" => "تقنيات-التمثيل-المسرحي-الأساسية",
                "slug_en" => "basic-theater-acting-techniques",
                "content_ar" => "تعلم أهم تقنيات التمثيل المسرحي التي تساعدك على تطوير مهاراتك. من خلال ورشنا التدريبية، ستتعلم كيفية استخدام الصوت والجسد والتعبير الوجهي بشكل احترافي. هذه التقنيات ستساعدك على أن تصبح ممثلاً أفضل وتؤدي أدوارك بثقة أكبر.",
                "content_en" => "Learn the most important theater acting techniques that help you develop your skills. Through our training workshops, you will learn how to use voice, body, and facial expression professionally. These techniques will help you become a better actor and perform your roles with greater confidence.",
                "category_id" => 2,
                'media' => [
                    [
                        'name'            => 'Acting Workshop 2',
                        'mime_type'       => 'image/png',
                        'uploaded_by'     => 1,
                        'size'	          => 50000,
                        'uploadable_type' => Article::class,
                        'url'             => '/website/img/blog/post2.png'
                    ]
                ]
            ],
            [
                "title_ar" => "نصائح مهمة للممثلين المبتدئين",
                "title_en" => "Important Tips for Beginner Actors",
                "slug_ar" => "نصائح-مهمة-للممثلين-المبتدئين",
                "slug_en" => "important-tips-for-beginner-actors",
                "content_ar" => "إذا كنت مبتدئاً في عالم التمثيل، فهذه النصائح ستفيدك كثيراً. تعلم كيفية التحضير للأدوار، وكيفية التعامل مع التوتر قبل الأداء، وأهمية التدريب المستمر. في ورشنا، نقدم لك الدعم والإرشاد اللازمين لتبدأ رحلتك بنجاح.",
                "content_en" => "If you are a beginner in the world of acting, these tips will be very useful. Learn how to prepare for roles, how to deal with stress before performance, and the importance of continuous training. In our workshops, we provide you with the support and guidance you need to start your journey successfully.",
                "category_id" => 4,
                'media' => [
                    [
                        'name'            => 'Acting Tips',
                        'mime_type'       => 'image/png',
                        'uploaded_by'     => 1,
                        'size'	          => 50000,
                        'uploadable_type' => Article::class,
                        'url'             => '/website/img/blog/post1.png'
                    ]
                ]
            ],
            [
                "title_ar" => "الإعداد للمسرح: دليل شامل للممثل",
                "title_en" => "Theater Preparation: Complete Guide for Actors",
                "slug_ar" => "الإعداد-للمسرح-دليل-شامل-للممثل",
                "slug_en" => "theater-preparation-complete-guide-for-actors",
                "content_ar" => "الإعداد الجيد للمسرح هو مفتاح الأداء الناجح. في هذه المقالة، نستعرض أهم الخطوات التي يجب على الممثل اتباعها قبل الأداء. من قراءة النص بعناية إلى التدريب على الحركة والصوت، كل هذه العناصر مهمة لتحقيق أداء متميز على المسرح.",
                "content_en" => "Good theater preparation is the key to successful performance. In this article, we review the most important steps that an actor should follow before performing. From carefully reading the script to training on movement and voice, all these elements are important to achieve an outstanding performance on stage.",
                "category_id" => 3,
                'media' => [
                    [
                        'name'            => 'Theater Prep',
                        'mime_type'       => 'image/png',
                        'uploaded_by'     => 1,
                        'size'	          => 50000,
                        'uploadable_type' => Article::class,
                        'url'             => '/website/img/blog/post2.png'
                    ]
                ]
            ],
            [
                "title_ar" => "أحدث ورش التمثيل المتاحة الآن",
                "title_en" => "Latest Acting Workshops Available Now",
                "slug_ar" => "أحدث-ورش-التمثيل-المتاحة-الآن",
                "slug_en" => "latest-acting-workshops-available-now",
                "content_ar" => "اكتشف أحدث ورش التمثيل التي نقدمها. من ورش المبتدئين إلى ورش المستوى المتقدم، لدينا برامج تدريبية تناسب جميع المستويات. انضم إلينا وابدأ رحلتك في عالم التمثيل مع أفضل المدربين المحترفين.",
                "content_en" => "Discover the latest acting workshops we offer. From beginner workshops to advanced level workshops, we have training programs suitable for all levels. Join us and start your journey in the world of acting with the best professional trainers.",
                "category_id" => 5,
                'media' => [
                    [
                        'name'            => 'Latest Workshops',
                        'mime_type'       => 'image/png',
                        'uploaded_by'     => 1,
                        'size'	          => 50000,
                        'uploadable_type' => Article::class,
                        'url'             => '/website/img/blog/post1.png'
                    ]
                ]
            ],
            [
                "title_ar" => "كيفية تطوير مهارات التمثيل لديك",
                "title_en" => "How to Develop Your Acting Skills",
                "slug_ar" => "كيفية-تطوير-مهارات-التمثيل-لديك",
                "slug_en" => "how-to-develop-your-acting-skills",
                "content_ar" => "تطوير مهارات التمثيل يحتاج إلى ممارسة مستمرة وتعلم دائم. في ورشنا، نقدم لك الأدوات والتمارين التي تساعدك على تحسين أدائك. من تمارين الصوت والحركة إلى تمارين التعبير العاطفي، كل شيء مصمم لمساعدتك على أن تصبح ممثلاً أفضل.",
                "content_en" => "Developing acting skills requires continuous practice and constant learning. In our workshops, we provide you with the tools and exercises that help you improve your performance. From voice and movement exercises to emotional expression exercises, everything is designed to help you become a better actor.",
                "category_id" => 2,
                'media' => [
                    [
                        'name'            => 'Develop Skills',
                        'mime_type'       => 'image/png',
                        'uploaded_by'     => 1,
                        'size'	          => 50000,
                        'uploadable_type' => Article::class,
                        'url'             => '/website/img/blog/post2.png'
                    ]
                ]
            ],
        ];
        // Create categories
        foreach ($categories as $category) {
            ArticleCategory::create([
                'title_ar' => $category['title_ar'],
                'title_en' => $category['title_en'],
            ]);
        }

        // Create articles
        foreach ($articles as $article) {
            $model = Article::create([
                'title_ar' => $article['title_ar'],
                'title_en' => $article['title_en'],
                'slug_ar' => $article['slug_ar'],
                'slug_en' => $article['slug_en'],
                'content_ar' => $article['content_ar'],
                'content_en' => $article['content_en'],
                'category_id' => $article['category_id'],
                'status' => 1,
            ]);
            
            if (isset($article['media']) && is_array($article['media'])) {
                foreach ($article['media'] as $media) {
                    $model->media()->create($media);
                }
            }
        }
    }

}