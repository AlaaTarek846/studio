<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();
        
        // Get first project category for seeding
        $category = ProjectCategory::first();
        if (!$category) {
            return;
        }

        $projects = [
            [
                "title_ar" => "ورشة التمثيل المسرحي الأساسية",
                "title_en" => "Basic Theater Acting Workshop",
                "slug_ar" => "ورشة-التمثيل-المسرحي-الأساسية",
                "slug_en" => "basic-theater-acting-workshop",
                "description_ar" => "ورشة شاملة للمبتدئين تركز على أساسيات التمثيل المسرحي. تعلم تقنيات الأداء، التحكم في الصوت، والحركة على المسرح. برنامج تدريبي متكامل يغطي جميع الجوانب الأساسية للتمثيل المسرحي.",
                "description_en" => "A comprehensive workshop for beginners focusing on the fundamentals of theater acting. Learn performance techniques, voice control, and stage movement. A complete training program covering all essential aspects of theater acting.",
                "project_category_id" => $category->id,
                "status" => 1,
                'thumbnail' => [
                    'name' => 'theater-workshop-thumbnail',
                    'mime_type' => 'image/jpeg',
                    'uploaded_by' => 1,
                    'size' => 250000,
                    'uploadable_type' => Project::class,
                    'identifier' => 'thumbnail',
                    'url' => 'https://images.unsplash.com/photo-1503095396549-807759245b35?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80'
                ],
                'slider' => [
                    [
                        'name' => 'theater-workshop-slider-1',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 300000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1503095396549-807759245b35?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'theater-workshop-slider-2',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 280000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1517457373958-b7bdd4587205?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'theater-workshop-slider-3',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 290000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80'
                    ]
                ]
            ],
            [
                "title_ar" => "ورشة التمثيل السينمائي المتقدمة",
                "title_en" => "Advanced Film Acting Workshop",
                "slug_ar" => "ورشة-التمثيل-السينمائي-المتقدمة",
                "slug_en" => "advanced-film-acting-workshop",
                "description_ar" => "ورشة متخصصة في التمثيل السينمائي والتلفزيوني. تعلم كيفية العمل أمام الكاميرا، تقنيات التمثيل للشاشة، والتفاعل مع المخرج. برنامج متقدم للممثلين ذوي الخبرة.",
                "description_en" => "A specialized workshop in film and television acting. Learn how to work in front of the camera, screen acting techniques, and director interaction. An advanced program for experienced actors.",
                "project_category_id" => $category->id,
                "status" => 1,
                'thumbnail' => [
                    'name' => 'film-acting-thumbnail',
                    'mime_type' => 'image/jpeg',
                    'uploaded_by' => 1,
                    'size' => 240000,
                    'uploadable_type' => Project::class,
                    'identifier' => 'thumbnail',
                    'url' => 'https://images.unsplash.com/photo-1485846234645-a62644f84728?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80'
                ],
                'slider' => [
                    [
                        'name' => 'film-acting-slider-1',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 310000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1485846234645-a62644f84728?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'film-acting-slider-2',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 295000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80'
                    ]
                ]
            ],
            [
                "title_ar" => "ورشة تقنيات الصوت والحركة",
                "title_en" => "Voice & Movement Techniques Workshop",
                "slug_ar" => "ورشة-تقنيات-الصوت-والحركة",
                "slug_en" => "voice-movement-techniques-workshop",
                "description_ar" => "ورشة متخصصة في تطوير مهارات الصوت والحركة للممثلين. تعلم التحكم في التنفس، نطق الكلمات، والحركة التعبيرية. برنامج شامل لتحسين الأداء التمثيلي.",
                "description_en" => "A specialized workshop in developing voice and movement skills for actors. Learn breath control, diction, and expressive movement. A comprehensive program to improve acting performance.",
                "project_category_id" => $category->id,
                "status" => 1,
                'thumbnail' => [
                    'name' => 'voice-movement-thumbnail',
                    'mime_type' => 'image/jpeg',
                    'uploaded_by' => 1,
                    'size' => 260000,
                    'uploadable_type' => Project::class,
                    'identifier' => 'thumbnail',
                    'url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80'
                ],
                'slider' => [
                    [
                        'name' => 'voice-movement-slider-1',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 320000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'voice-movement-slider-2',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 285000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1503095396549-807759245b35?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'voice-movement-slider-3',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 300000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1517457373958-b7bdd4587205?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80'
                    ]
                ]
            ],
            [
                "title_ar" => "ورشة الإعداد والتحضير للمسرح",
                "title_en" => "Theater Preparation Workshop",
                "slug_ar" => "ورشة-الإعداد-والتحضير-للمسرح",
                "slug_en" => "theater-preparation-workshop",
                "description_ar" => "ورشة تركز على إعداد الممثل للعروض المسرحية. تعلم كيفية تحليل النص، بناء الشخصية، والتحضير للعروض. برنامج شامل يغطي جميع جوانب الإعداد المسرحي.",
                "description_en" => "A workshop focusing on preparing actors for theatrical performances. Learn how to analyze scripts, build characters, and prepare for shows. A comprehensive program covering all aspects of theater preparation.",
                "project_category_id" => $category->id,
                "status" => 1,
                'thumbnail' => [
                    'name' => 'theater-prep-thumbnail',
                    'mime_type' => 'image/jpeg',
                    'uploaded_by' => 1,
                    'size' => 255000,
                    'uploadable_type' => Project::class,
                    'identifier' => 'thumbnail',
                    'url' => 'https://images.unsplash.com/photo-1517457373958-b7bdd4587205?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80'
                ],
                'slider' => [
                    [
                        'name' => 'theater-prep-slider-1',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 305000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1517457373958-b7bdd4587205?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'theater-prep-slider-2',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 290000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1503095396549-807759245b35?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80'
                    ]
                ]
            ],
            [
                "title_ar" => "ورشة التمثيل للمبتدئين",
                "title_en" => "Beginner Acting Workshop",
                "slug_ar" => "ورشة-التمثيل-للمبتدئين",
                "slug_en" => "beginner-acting-workshop",
                "description_ar" => "ورشة مثالية للمبتدئين الذين يرغبون في بدء رحلتهم في عالم التمثيل. تعلم الأساسيات من الصفر في بيئة داعمة ومشجعة. برنامج تدريبي شامل يبني الثقة والمهارات الأساسية.",
                "description_en" => "An ideal workshop for beginners who want to start their journey in acting. Learn the basics from scratch in a supportive and encouraging environment. A comprehensive training program that builds confidence and basic skills.",
                "project_category_id" => $category->id,
                "status" => 1,
                'thumbnail' => [
                    'name' => 'beginner-acting-thumbnail',
                    'mime_type' => 'image/jpeg',
                    'uploaded_by' => 1,
                    'size' => 245000,
                    'uploadable_type' => Project::class,
                    'identifier' => 'thumbnail',
                    'url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80'
                ],
                'slider' => [
                    [
                        'name' => 'beginner-acting-slider-1',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 315000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80'
                    ],
                    [
                        'name' => 'beginner-acting-slider-2',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 300000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'beginner-acting-slider-3',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 295000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1503095396549-807759245b35?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80'
                    ]
                ]
            ],
            [
                "title_ar" => "ورشة التمثيل الإيمائي",
                "title_en" => "Mime Acting Workshop",
                "slug_ar" => "ورشة-التمثيل-الإيمائي",
                "slug_en" => "mime-acting-workshop",
                "description_ar" => "ورشة متخصصة في فن التمثيل الإيمائي. تعلم كيفية التعبير عن المشاعر والأفكار بدون كلمات، استخدام لغة الجسد، والإيماءات التعبيرية. برنامج شامل لتطوير مهارات التمثيل الصامت.",
                "description_en" => "A specialized workshop in the art of mime acting. Learn how to express emotions and ideas without words, use body language, and expressive gestures. A comprehensive program to develop silent acting skills.",
                "project_category_id" => $category->id,
                "status" => 1,
                'thumbnail' => [
                    'name' => 'mime-acting-thumbnail',
                    'mime_type' => 'image/jpeg',
                    'uploaded_by' => 1,
                    'size' => 250000,
                    'uploadable_type' => Project::class,
                    'identifier' => 'thumbnail',
                    'url' => 'https://images.unsplash.com/photo-1517604931442-7f0d8bf4c3cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
                ],
                'slider' => [
                    [
                        'name' => 'mime-acting-slider-1',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 300000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1517604931442-7f0d8bf4c3cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'mime-acting-slider-2',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 280000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1503095396549-807759245b35?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ]
                ]
            ],
            [
                "title_ar" => "ورشة بناء الشخصية المسرحية",
                "title_en" => "Character Building Workshop",
                "slug_ar" => "ورشة-بناء-الشخصية-المسرحية",
                "slug_en" => "character-building-workshop",
                "description_ar" => "ورشة متخصصة في بناء وتطوير الشخصيات المسرحية. تعلم كيفية تحليل النص، فهم دوافع الشخصية، وخلق شخصيات مقنعة ومؤثرة. برنامج شامل لتطوير مهارات بناء الشخصية.",
                "description_en" => "A specialized workshop in building and developing theatrical characters. Learn how to analyze scripts, understand character motivations, and create convincing and impactful characters. A comprehensive program to develop character building skills.",
                "project_category_id" => $category->id,
                "status" => 1,
                'thumbnail' => [
                    'name' => 'character-building-thumbnail',
                    'mime_type' => 'image/jpeg',
                    'uploaded_by' => 1,
                    'size' => 255000,
                    'uploadable_type' => Project::class,
                    'identifier' => 'thumbnail',
                    'url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
                ],
                'slider' => [
                    [
                        'name' => 'character-building-slider-1',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 310000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'character-building-slider-2',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 295000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1517457373958-b7bdd4587205?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'character-building-slider-3',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 300000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1503095396549-807759245b35?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ]
                ]
            ],
            [
                "title_ar" => "ورشة التمثيل الكوميدي",
                "title_en" => "Comedy Acting Workshop",
                "slug_ar" => "ورشة-التمثيل-الكوميدي",
                "slug_en" => "comedy-acting-workshop",
                "description_ar" => "ورشة متخصصة في التمثيل الكوميدي والكوميديا المسرحية. تعلم تقنيات الإضحاك، التوقيت الكوميدي، والتفاعل مع الجمهور. برنامج شامل لتطوير مهارات التمثيل الكوميدي.",
                "description_en" => "A specialized workshop in comedy acting and theatrical comedy. Learn techniques for making people laugh, comedic timing, and audience interaction. A comprehensive program to develop comedy acting skills.",
                "project_category_id" => $category->id,
                "status" => 1,
                'thumbnail' => [
                    'name' => 'comedy-acting-thumbnail',
                    'mime_type' => 'image/jpeg',
                    'uploaded_by' => 1,
                    'size' => 245000,
                    'uploadable_type' => Project::class,
                    'identifier' => 'thumbnail',
                    'url' => 'https://images.unsplash.com/photo-1485846234645-a62644f84728?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
                ],
                'slider' => [
                    [
                        'name' => 'comedy-acting-slider-1',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 305000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1485846234645-a62644f84728?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'comedy-acting-slider-2',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 290000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1517604931442-7f0d8bf4c3cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ]
                ]
            ],
            [
                "title_ar" => "ورشة التمثيل الدرامي",
                "title_en" => "Drama Acting Workshop",
                "slug_ar" => "ورشة-التمثيل-الدرامي",
                "slug_en" => "drama-acting-workshop",
                "description_ar" => "ورشة متخصصة في التمثيل الدرامي. تعلم كيفية التعبير عن المشاعر العميقة، بناء التوتر الدرامي، وإيصال الرسائل القوية. برنامج شامل لتطوير مهارات التمثيل الدرامي.",
                "description_en" => "A specialized workshop in dramatic acting. Learn how to express deep emotions, build dramatic tension, and convey powerful messages. A comprehensive program to develop dramatic acting skills.",
                "project_category_id" => $category->id,
                "status" => 1,
                'thumbnail' => [
                    'name' => 'drama-acting-thumbnail',
                    'mime_type' => 'image/jpeg',
                    'uploaded_by' => 1,
                    'size' => 260000,
                    'uploadable_type' => Project::class,
                    'identifier' => 'thumbnail',
                    'url' => 'https://images.unsplash.com/photo-1517457373958-b7bdd4587205?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
                ],
                'slider' => [
                    [
                        'name' => 'drama-acting-slider-1',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 315000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1517457373958-b7bdd4587205?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'drama-acting-slider-2',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 300000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1503095396549-807759245b35?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'drama-acting-slider-3',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 285000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ]
                ]
            ],
            [
                "title_ar" => "ورشة التمثيل للأطفال",
                "title_en" => "Children Acting Workshop",
                "slug_ar" => "ورشة-التمثيل-للأطفال",
                "slug_en" => "children-acting-workshop",
                "description_ar" => "ورشة مصممة خصيصاً للأطفال لتعلم أساسيات التمثيل. برنامج تفاعلي وممتع يساعد الأطفال على تطوير الثقة بالنفس، مهارات التواصل، والإبداع من خلال التمثيل.",
                "description_en" => "A workshop specially designed for children to learn the basics of acting. An interactive and fun program that helps children develop self-confidence, communication skills, and creativity through acting.",
                "project_category_id" => $category->id,
                "status" => 1,
                'thumbnail' => [
                    'name' => 'children-acting-thumbnail',
                    'mime_type' => 'image/jpeg',
                    'uploaded_by' => 1,
                    'size' => 240000,
                    'uploadable_type' => Project::class,
                    'identifier' => 'thumbnail',
                    'url' => 'https://images.unsplash.com/photo-1503095396549-807759245b35?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
                ],
                'slider' => [
                    [
                        'name' => 'children-acting-slider-1',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 295000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1503095396549-807759245b35?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'children-acting-slider-2',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 280000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ]
                ]
            ],
            [
                "title_ar" => "ورشة التمثيل الموسيقي",
                "title_en" => "Musical Theater Workshop",
                "slug_ar" => "ورشة-التمثيل-الموسيقي",
                "slug_en" => "musical-theater-workshop",
                "description_ar" => "ورشة متخصصة في التمثيل الموسيقي والغناء المسرحي. تعلم كيفية الجمع بين التمثيل والغناء والرقص، أداء الأغاني المسرحية، والعمل في العروض الموسيقية. برنامج شامل للتمثيل الموسيقي.",
                "description_en" => "A specialized workshop in musical theater and theatrical singing. Learn how to combine acting, singing, and dancing, perform theatrical songs, and work in musical productions. A comprehensive program for musical theater.",
                "project_category_id" => $category->id,
                "status" => 1,
                'thumbnail' => [
                    'name' => 'musical-theater-thumbnail',
                    'mime_type' => 'image/jpeg',
                    'uploaded_by' => 1,
                    'size' => 250000,
                    'uploadable_type' => Project::class,
                    'identifier' => 'thumbnail',
                    'url' => 'https://images.unsplash.com/photo-1517604931442-7f0d8bf4c3cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
                ],
                'slider' => [
                    [
                        'name' => 'musical-theater-slider-1',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 310000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1517604931442-7f0d8bf4c3cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'musical-theater-slider-2',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 300000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1517457373958-b7bdd4587205?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'musical-theater-slider-3',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 295000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1503095396549-807759245b35?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ]
                ]
            ],
            [
                "title_ar" => "ورشة التمثيل التلفزيوني",
                "title_en" => "TV Acting Workshop",
                "slug_ar" => "ورشة-التمثيل-التلفزيوني",
                "slug_en" => "tv-acting-workshop",
                "description_ar" => "ورشة متخصصة في التمثيل التلفزيوني. تعلم كيفية العمل أمام الكاميرا التلفزيونية، تقنيات التمثيل للشاشة الصغيرة، والعمل في المسلسلات والبرامج التلفزيونية. برنامج شامل للتمثيل التلفزيوني.",
                "description_en" => "A specialized workshop in television acting. Learn how to work in front of TV cameras, small screen acting techniques, and work in TV series and programs. A comprehensive program for television acting.",
                "project_category_id" => $category->id,
                "status" => 1,
                'thumbnail' => [
                    'name' => 'tv-acting-thumbnail',
                    'mime_type' => 'image/jpeg',
                    'uploaded_by' => 1,
                    'size' => 255000,
                    'uploadable_type' => Project::class,
                    'identifier' => 'thumbnail',
                    'url' => 'https://images.unsplash.com/photo-1485846234645-a62644f84728?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
                ],
                'slider' => [
                    [
                        'name' => 'tv-acting-slider-1',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 305000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1485846234645-a62644f84728?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'tv-acting-slider-2',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 290000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ]
                ]
            ],
            [
                "title_ar" => "ورشة التمثيل التجريبي",
                "title_en" => "Experimental Acting Workshop",
                "slug_ar" => "ورشة-التمثيل-التجريبي",
                "slug_en" => "experimental-acting-workshop",
                "description_ar" => "ورشة متخصصة في التمثيل التجريبي والحديث. تعلم تقنيات التمثيل غير التقليدية، استكشاف أشكال جديدة من التعبير الفني، والابتكار في الأداء المسرحي. برنامج للممثلين المبدعين.",
                "description_en" => "A specialized workshop in experimental and contemporary acting. Learn non-traditional acting techniques, explore new forms of artistic expression, and innovate in theatrical performance. A program for creative actors.",
                "project_category_id" => $category->id,
                "status" => 1,
                'thumbnail' => [
                    'name' => 'experimental-acting-thumbnail',
                    'mime_type' => 'image/jpeg',
                    'uploaded_by' => 1,
                    'size' => 245000,
                    'uploadable_type' => Project::class,
                    'identifier' => 'thumbnail',
                    'url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
                ],
                'slider' => [
                    [
                        'name' => 'experimental-acting-slider-1',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 320000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'experimental-acting-slider-2',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 300000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1517457373958-b7bdd4587205?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ]
                ]
            ],
            [
                "title_ar" => "ورشة التمثيل الكلاسيكي",
                "title_en" => "Classical Acting Workshop",
                "slug_ar" => "ورشة-التمثيل-الكلاسيكي",
                "slug_en" => "classical-acting-workshop",
                "description_ar" => "ورشة متخصصة في التمثيل الكلاسيكي والأعمال المسرحية التقليدية. تعلم كيفية أداء النصوص الكلاسيكية، فهم اللغة القديمة، وتقديم الأعمال المسرحية الكلاسيكية. برنامج للمهتمين بالتراث المسرحي.",
                "description_en" => "A specialized workshop in classical acting and traditional theatrical works. Learn how to perform classical texts, understand ancient language, and present classical theatrical works. A program for those interested in theatrical heritage.",
                "project_category_id" => $category->id,
                "status" => 1,
                'thumbnail' => [
                    'name' => 'classical-acting-thumbnail',
                    'mime_type' => 'image/jpeg',
                    'uploaded_by' => 1,
                    'size' => 260000,
                    'uploadable_type' => Project::class,
                    'identifier' => 'thumbnail',
                    'url' => 'https://images.unsplash.com/photo-1517457373958-b7bdd4587205?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
                ],
                'slider' => [
                    [
                        'name' => 'classical-acting-slider-1',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 310000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1517457373958-b7bdd4587205?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'classical-acting-slider-2',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 295000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1503095396549-807759245b35?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'classical-acting-slider-3',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 285000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ]
                ]
            ],
            [
                "title_ar" => "ورشة التمثيل التفاعلي",
                "title_en" => "Interactive Acting Workshop",
                "slug_ar" => "ورشة-التمثيل-التفاعلي",
                "slug_en" => "interactive-acting-workshop",
                "description_ar" => "ورشة متخصصة في التمثيل التفاعلي والمسرح التفاعلي. تعلم كيفية التفاعل مع الجمهور، الارتجال، وخلق تجارب مسرحية تفاعلية. برنامج مبتكر للممثلين المعاصرين.",
                "description_en" => "A specialized workshop in interactive acting and interactive theater. Learn how to interact with the audience, improvise, and create interactive theatrical experiences. An innovative program for contemporary actors.",
                "project_category_id" => $category->id,
                "status" => 1,
                'thumbnail' => [
                    'name' => 'interactive-acting-thumbnail',
                    'mime_type' => 'image/jpeg',
                    'uploaded_by' => 1,
                    'size' => 250000,
                    'uploadable_type' => Project::class,
                    'identifier' => 'thumbnail',
                    'url' => 'https://images.unsplash.com/photo-1503095396549-807759245b35?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
                ],
                'slider' => [
                    [
                        'name' => 'interactive-acting-slider-1',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 305000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1503095396549-807759245b35?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'interactive-acting-slider-2',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 290000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ]
                ]
            ],
            [
                "title_ar" => "ورشة التمثيل للشباب",
                "title_en" => "Youth Acting Workshop",
                "slug_ar" => "ورشة-التمثيل-للشباب",
                "slug_en" => "youth-acting-workshop",
                "description_ar" => "ورشة مصممة خصيصاً للشباب لتعلم التمثيل. برنامج شامل يساعد الشباب على تطوير مهاراتهم التمثيلية، بناء الثقة، والتعبير عن أنفسهم من خلال الفن. بيئة داعمة ومشجعة.",
                "description_en" => "A workshop specially designed for youth to learn acting. A comprehensive program that helps young people develop their acting skills, build confidence, and express themselves through art. A supportive and encouraging environment.",
                "project_category_id" => $category->id,
                "status" => 1,
                'thumbnail' => [
                    'name' => 'youth-acting-thumbnail',
                    'mime_type' => 'image/jpeg',
                    'uploaded_by' => 1,
                    'size' => 245000,
                    'uploadable_type' => Project::class,
                    'identifier' => 'thumbnail',
                    'url' => 'https://images.unsplash.com/photo-1517604931442-7f0d8bf4c3cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
                ],
                'slider' => [
                    [
                        'name' => 'youth-acting-slider-1',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 315000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1517604931442-7f0d8bf4c3cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'youth-acting-slider-2',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 300000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1517457373958-b7bdd4587205?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'youth-acting-slider-3',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 285000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1503095396549-807759245b35?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ]
                ]
            ],
            [
                "title_ar" => "ورشة التمثيل المسرحي المتقدم",
                "title_en" => "Advanced Theater Acting Workshop",
                "slug_ar" => "ورشة-التمثيل-المسرحي-المتقدم",
                "slug_en" => "advanced-theater-acting-workshop",
                "description_ar" => "ورشة متقدمة للممثلين ذوي الخبرة في التمثيل المسرحي. تعمق في تقنيات الأداء المتقدمة، العمل على نصوص معقدة، وتطوير أسلوب تمثيلي فريد. برنامج للمحترفين.",
                "description_en" => "An advanced workshop for experienced actors in theater acting. Deepen advanced performance techniques, work on complex scripts, and develop a unique acting style. A program for professionals.",
                "project_category_id" => $category->id,
                "status" => 1,
                'thumbnail' => [
                    'name' => 'advanced-theater-thumbnail',
                    'mime_type' => 'image/jpeg',
                    'uploaded_by' => 1,
                    'size' => 260000,
                    'uploadable_type' => Project::class,
                    'identifier' => 'thumbnail',
                    'url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
                ],
                'slider' => [
                    [
                        'name' => 'advanced-theater-slider-1',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 320000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'advanced-theater-slider-2',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 310000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1517457373958-b7bdd4587205?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ]
                ]
            ],
            [
                "title_ar" => "ورشة التمثيل الإذاعي",
                "title_en" => "Radio Acting Workshop",
                "slug_ar" => "ورشة-التمثيل-الإذاعي",
                "slug_en" => "radio-acting-workshop",
                "description_ar" => "ورشة متخصصة في التمثيل الإذاعي والدراما الصوتية. تعلم كيفية استخدام الصوت فقط للتعبير، أداء البرامج الإذاعية، وخلق صور ذهنية من خلال الصوت. برنامج فريد للتمثيل الإذاعي.",
                "description_en" => "A specialized workshop in radio acting and audio drama. Learn how to use voice alone for expression, perform radio programs, and create mental images through sound. A unique program for radio acting.",
                "project_category_id" => $category->id,
                "status" => 1,
                'thumbnail' => [
                    'name' => 'radio-acting-thumbnail',
                    'mime_type' => 'image/jpeg',
                    'uploaded_by' => 1,
                    'size' => 250000,
                    'uploadable_type' => Project::class,
                    'identifier' => 'thumbnail',
                    'url' => 'https://images.unsplash.com/photo-1485846234645-a62644f84728?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
                ],
                'slider' => [
                    [
                        'name' => 'radio-acting-slider-1',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 305000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1485846234645-a62644f84728?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'radio-acting-slider-2',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 295000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'radio-acting-slider-3',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 300000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1503095396549-807759245b35?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ]
                ]
            ],
            [
                "title_ar" => "ورشة التمثيل الارتجالي",
                "title_en" => "Improv Acting Workshop",
                "slug_ar" => "ورشة-التمثيل-الارتجالي",
                "slug_en" => "improv-acting-workshop",
                "description_ar" => "ورشة متخصصة في التمثيل الارتجالي والارتجال المسرحي. تعلم كيفية الارتجال، التفكير السريع، والعمل الجماعي في التمثيل. برنامج ممتع ومحفز للإبداع.",
                "description_en" => "A specialized workshop in improv acting and theatrical improvisation. Learn how to improvise, think quickly, and work as a team in acting. A fun and creativity-stimulating program.",
                "project_category_id" => $category->id,
                "status" => 1,
                'thumbnail' => [
                    'name' => 'improv-acting-thumbnail',
                    'mime_type' => 'image/jpeg',
                    'uploaded_by' => 1,
                    'size' => 255000,
                    'uploadable_type' => Project::class,
                    'identifier' => 'thumbnail',
                    'url' => 'https://images.unsplash.com/photo-1517457373958-b7bdd4587205?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
                ],
                'slider' => [
                    [
                        'name' => 'improv-acting-slider-1',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 310000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1517457373958-b7bdd4587205?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'improv-acting-slider-2',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 300000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1503095396549-807759245b35?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ]
                ]
            ],
            [
                "title_ar" => "ورشة التمثيل للكبار",
                "title_en" => "Adult Acting Workshop",
                "slug_ar" => "ورشة-التمثيل-للكبار",
                "slug_en" => "adult-acting-workshop",
                "description_ar" => "ورشة مصممة خصيصاً للكبار الذين يرغبون في تعلم التمثيل. برنامج مرن يناسب الجداول المزدحمة، يركز على تطوير المهارات التمثيلية الأساسية، وبناء الثقة في الأداء.",
                "description_en" => "A workshop specially designed for adults who want to learn acting. A flexible program that fits busy schedules, focusing on developing basic acting skills and building performance confidence.",
                "project_category_id" => $category->id,
                "status" => 1,
                'thumbnail' => [
                    'name' => 'adult-acting-thumbnail',
                    'mime_type' => 'image/jpeg',
                    'uploaded_by' => 1,
                    'size' => 245000,
                    'uploadable_type' => Project::class,
                    'identifier' => 'thumbnail',
                    'url' => 'https://images.unsplash.com/photo-1503095396549-807759245b35?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
                ],
                'slider' => [
                    [
                        'name' => 'adult-acting-slider-1',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 315000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1503095396549-807759245b35?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'adult-acting-slider-2',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 300000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ],
                    [
                        'name' => 'adult-acting-slider-3',
                        'mime_type' => 'image/jpeg',
                        'uploaded_by' => 1,
                        'size' => 290000,
                        'uploadable_type' => Project::class,
                        'identifier' => 'slider',
                        'url' => 'https://images.unsplash.com/photo-1517457373958-b7bdd4587205?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
                    ]
                ]
            ],
        ];

        foreach ($projects as $projectData) {
            $thumbnail = $projectData['thumbnail'] ?? null;
            $slider = $projectData['slider'] ?? [];
            unset($projectData['thumbnail'], $projectData['slider']);

            $model = Project::create($projectData);
            
            // Create thumbnail
            if ($thumbnail) {
                $model->media()->create($thumbnail);
            }
            
            // Create slider images
            if (!empty($slider)) {
                foreach ($slider as $sliderImage) {
                    $model->media()->create($sliderImage);
                }
            }
        }
    }
}