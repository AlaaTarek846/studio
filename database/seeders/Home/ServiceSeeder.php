<?php

namespace Database\Seeders\Home;

use App\Models\Faq;
use App\Models\Service;
use App\Models\File;
use App\Models\ServiceFaq;
use App\Models\ServiceVideo;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
            $services = [
                [
                    'title_ar'       => "ورشة التمثيل الأساسية",
                    'title_en'       => "Basic Acting Workshop",
                    'slug_ar'       => "ورشة-التمثيل-الأساسية",
                    'slug_en'       => "basic-acting-workshop",
                    'description_en' => 'Learn the fundamentals of acting in our comprehensive basic workshop. Perfect for beginners who want to start their acting journey. We cover essential techniques, character development, and stage presence.',
                    'description_ar' => 'تعلم أساسيات التمثيل في ورشتنا الشاملة للمبتدئين. مثالية للمبتدئين الذين يريدون بدء رحلتهم في عالم التمثيل. نغطي التقنيات الأساسية، تطوير الشخصية، والحضور المسرحي.',
                    "quote_en"       => "Acting is not about being someone different. It's finding the similarity in what is apparently different, then finding myself in there.", 
                    "quote_ar"       => "التمثيل ليس أن تكون شخصاً مختلفاً. إنه العثور على التشابه في ما يبدو مختلفاً، ثم العثور على نفسي هناك.",
                    'files'          => [
                        [
                            'name'            => 'service.jpg',
                            'mime_type'       => 'image/jpeg',
                            'uploaded_by'     => 1,
                            'size'	          => 50000,
                            'uploadable_type' => Service::class,
                            'identifier'      => 'image',
                            'url'             => '/website/img/service.jpg'
                        ],
                        [
                            'name'            => 'icon-design.svg',
                            'mime_type'       => 'image/svg+xml',
                            'uploaded_by'     => 1,
                            'size'	          => 10000,
                            'uploadable_type' => Service::class,
                            'identifier'      => 'icon',
                            'url'             => '/website/img/icons/icon-design.svg'
                        ]
                    ]
                ],
                [
                    'title_en'       => "Theater Acting Workshop",
                    'title_ar'       => "ورشة التمثيل المسرحي",
                    'slug_ar'       => "ورشة-التمثيل-المسرحي",
                    'slug_en'       => "theater-acting-workshop",
                    'description_en' => 'Master the art of theater acting with our specialized workshop. Learn stage techniques, voice projection, movement, and how to connect with live audiences. Perfect for those passionate about stage performance.',
                    'description_ar' => 'أتقن فن التمثيل المسرحي في ورشتنا المتخصصة. تعلم تقنيات المسرح، إسقاط الصوت، الحركة، وكيفية التواصل مع الجمهور الحي. مثالية لعشاق الأداء المسرحي.',
                    "quote_en"       => "The theater is a spiritual and social X-ray of its time. The stage is a magic circle where only the most real things happen.", 
                    "quote_ar"       => "المسرح هو أشعة روحية واجتماعية لزمنه. المسرح دائرة سحرية حيث تحدث فقط أكثر الأشياء واقعية.",
                    'files'          => [
                        [
                            'name'            => 'service.jpg',
                            'mime_type'       => 'image/jpeg',
                            'uploaded_by'     => 1,
                            'size'	          => 50000,
                            'uploadable_type' => Service::class,
                            'identifier'      => 'image',
                            'url'             => '/website/img/service.jpg'
                        ],
                        [
                            'name'            => 'speech-bubble.svg',
                            'mime_type'       => 'image/svg+xml',
                            'uploaded_by'     => 1,
                            'size'	          => 10000,
                            'uploadable_type' => Service::class,
                            'identifier'      => 'icon',
                            'url'             => '/website/img/icons/speech-bubble.svg'
                        ]
                    ]
                ],
                [
                    'title_en'       => "Film Acting Workshop",
                    'title_ar'       => "ورشة التمثيل السينمائي",
                    'slug_ar'       => "ورشة-التمثيل-السينمائي",
                    'slug_en'       => "film-acting-workshop",
                    'description_en' => 'Discover the unique techniques of film acting. Learn how to work with cameras, understand framing, master subtle expressions, and deliver powerful performances on screen. Ideal for aspiring film actors.',
                    'description_ar' => 'اكتشف تقنيات التمثيل السينمائي الفريدة. تعلم كيفية العمل مع الكاميرات، فهم الإطارات، إتقان التعبيرات الدقيقة، وتقديم أداء قوي على الشاشة. مثالية للممثلين السينمائيين الطموحين.',
                    "quote_en"       => "Acting is a very personal process. It has to do with expressing your own personality, and discovering the character you're playing through your own experience.", 
                    "quote_ar"       => "التمثيل عملية شخصية جداً. لها علاقة بالتعبير عن شخصيتك الخاصة، واكتشاف الشخصية التي تلعبها من خلال تجربتك الخاصة.",
                    'files'          => [
                        [
                            'name'            => 'service.jpg',
                            'mime_type'       => 'image/jpeg',
                            'uploaded_by'     => 1,
                            'size'	          => 50000,
                            'uploadable_type' => Service::class,
                            'identifier'      => 'image',
                            'url'             => '/website/img/service.jpg'
                        ],
                        [
                            'name'            => 'digital.svg',
                            'mime_type'       => 'image/svg+xml',
                            'uploaded_by'     => 1,
                            'size'	          => 10000,
                            'uploadable_type' => Service::class,
                            'identifier'      => 'icon',
                            'url'             => '/website/img/icons/digital.svg'
                        ]
                    ]
                ],
                [
                    'title_en'       => "Camera Preparation Workshop",
                    'title_ar'       => "ورشة الإعداد للكاميرا",
                    'slug_en'       => "camera-preparation-workshop",
                    'slug_ar'       => "ورشة-الإعداد-للكاميرا",
                    'description_en' => 'Prepare yourself for on-camera work with our specialized workshop. Learn how to position yourself, understand camera angles, work with lighting, and deliver natural performances that translate well on screen.',
                    'description_ar' => 'جهز نفسك للعمل أمام الكاميرا في ورشتنا المتخصصة. تعلم كيفية وضع نفسك، فهم زوايا الكاميرا، العمل مع الإضاءة، وتقديم أداء طبيعي يترجم جيداً على الشاشة.',
                    "quote_en"       => "The camera is like a person. You have to treat it with respect and understand its language. When you do, it will reveal your truth.", 
                    "quote_ar"       => "الكاميرا مثل شخص. يجب أن تعاملها باحترام وتفهم لغتها. عندما تفعل ذلك، سوف تكشف حقيقتك.",
                    'files'          => [
                        [
                            'name'            => 'service.jpg',
                            'mime_type'       => 'image/jpeg',
                            'uploaded_by'     => 1,
                            'size'	          => 50000,
                            'uploadable_type' => Service::class,
                            'identifier'      => 'image',
                            'url'             => '/website/img/service.jpg'
                        ],
                        [
                            'name'            => 'app.svg',
                            'mime_type'       => 'image/svg+xml',
                            'uploaded_by'     => 1,
                            'size'	          => 10000,
                            'uploadable_type' => Service::class,
                            'identifier'      => 'icon',
                            'url'             => '/website/img/icons/app.svg'
                        ]
                    ]
                ],
                [
                    'title_en'       => "Voice Expression Workshop",
                    'title_ar'       => "ورشة التعبير الصوتي",
                    'slug_en'       => "voice-expression-workshop",
                    'slug_ar'       => "ورشة-التعبير-الصوتي",
                    'description_en' => 'Master the art of voice acting and vocal expression. Learn voice control, modulation, accent work, and how to use your voice as a powerful tool for character development and emotional expression.',
                    'description_ar' => 'أتقن فن التمثيل الصوتي والتعبير الصوتي. تعلم التحكم في الصوت، التعديل، العمل على اللهجات، وكيفية استخدام صوتك كأداة قوية لتطوير الشخصية والتعبير العاطفي.',
                    "quote_en"       => "The voice is the most powerful tool an actor has. It can convey emotion, create character, and move audiences in ways that words alone cannot.", 
                    "quote_ar"       => "الصوت هو أقوى أداة يمتلكها الممثل. يمكنه نقل المشاعر، خلق الشخصية، وتحريك الجماهير بطرق لا تستطيع الكلمات وحدها القيام بها.",     
                    'files'          => [
                        [
                            'name'            => 'service.jpg',
                            'mime_type'       => 'image/jpeg',
                            'uploaded_by'     => 1,
                            'size'	          => 50000,
                            'uploadable_type' => Service::class,
                            'identifier'      => 'image',
                            'url'             => '/website/img/service.jpg'
                        ],
                        [
                            'name'            => 'call.svg',
                            'mime_type'       => 'image/svg+xml',
                            'uploaded_by'     => 1,
                            'size'	          => 10000,
                            'uploadable_type' => Service::class,
                            'identifier'      => 'icon',
                            'url'             => '/website/img/icons/call.svg'
                        ]
                    ]
                ],
                [
                    'title_en'       => "Physical Movement Workshop",
                    'title_ar'       => "ورشة الحركة الجسدية",
                    'slug_en'       => "physical-movement-workshop",
                    'slug_ar'       => "ورشة-الحركة-الجسدية",
                    'description_en' => 'Develop your physical presence and movement skills. Learn body language, stage movement, choreography basics, and how to use your body to tell stories and express emotions effectively.',
                    'description_ar' => 'طور حضورك الجسدي ومهارات الحركة. تعلم لغة الجسد، حركة المسرح، أساسيات الكوريوجرافيا، وكيفية استخدام جسدك لرواية القصص والتعبير عن المشاعر بفعالية.',
                    "quote_en"       => "The body never lies. Every gesture, every movement tells a story. As actors, we must learn to speak the language of the body fluently.", 
                    "quote_ar"       => "الجسد لا يكذب أبداً. كل إيماءة، كل حركة تحكي قصة. كممثلين، يجب أن نتعلم التحدث بلغة الجسد بطلاقة.",
                    'files'          => [
                        [
                            'name'            => 'service.jpg',
                            'mime_type'       => 'image/jpeg',
                            'uploaded_by'     => 1,
                            'size'	          => 50000,
                            'uploadable_type' => Service::class,
                            'identifier'      => 'image',
                            'url'             => '/website/img/service.jpg'
                        ],
                        [
                            'name'            => 'support.svg',
                            'mime_type'       => 'image/svg+xml',
                            'uploaded_by'     => 1,
                            'size'	          => 10000,
                            'uploadable_type' => Service::class,
                            'identifier'      => 'icon',
                            'url'             => '/website/img/icons/support.svg'
                        ]
                    ]
                ]
            ];

            $ServiceFaqs = [
                [
                    'title_ar'       => "كيف أبدأ في ورش التمثيل؟",
                    'title_en'       => "How do I start in acting workshops?",
                    'description_en' => 'Starting your acting journey begins with choosing the right workshop for your level. Our basic acting workshop is perfect for beginners. You\'ll learn fundamental techniques, build confidence, and discover your unique acting style in a supportive environment.',
                    'description_ar' => 'تبدأ رحلتك في التمثيل باختيار الورشة المناسبة لمستواك. ورشة التمثيل الأساسية مثالية للمبتدئين. ستتعلم التقنيات الأساسية، تبني الثقة، وتكتشف أسلوبك الفريد في التمثيل في بيئة داعمة.',
                    'sort' =>1
                ],
                [
                    'title_en'       => "What should I expect in my first workshop?",
                    'title_ar'       => "ماذا يجب أن أتوقع في ورشتي الأولى؟",
                    'description_en' => 'In your first workshop, expect a welcoming environment where you\'ll participate in warm-up exercises, basic acting techniques, and simple scene work. Our instructors provide individual attention and constructive feedback to help you grow.',
                    'description_ar' => 'في ورشتك الأولى، توقع بيئة ترحيبية حيث ستشارك في تمارين الإحماء، تقنيات التمثيل الأساسية، وعمل مشاهد بسيطة. مدربونا يقدمون اهتماماً فردياً وملاحظات بناءة لمساعدتك على النمو.',
                    'sort' =>2
                ],
                [
                    'title_en'       => "Do I need prior experience to join?",
                    'title_ar'       => "هل أحتاج خبرة سابقة للانضمام؟",
                    'description_en' => 'No prior experience is required! Our workshops are designed for all levels, from complete beginners to those looking to refine their skills. Each workshop is structured to accommodate different experience levels and learning paces.',
                    'description_ar' => 'لا حاجة لخبرة سابقة! ورشنا مصممة لجميع المستويات، من المبتدئين تماماً إلى أولئك الذين يبحثون عن تحسين مهاراتهم. كل ورشة منظمة لاستيعاب مستويات الخبرة المختلفة ووتائر التعلم.',
                    'sort' =>3
                ]
                
            ];

            foreach ($services as $service) {
                $model = Service::create([
                    'status'         => true,
                    'title_en'       => $service['title_en'],
                    'title_ar'       => $service['title_ar'],
                    'description_en' => $service['description_en'],
                    'description_ar' => $service['description_ar'],
                    'quote_en'       => $service['quote_en'],
                    'quote_ar'       => $service['quote_ar'],
                    'slug_en'       => $service['slug_en'],
                    'slug_ar'       => $service['slug_ar'],

                ]);
                if (isset($service['files']) && is_array($service['files'])) {
                    foreach ($service['files'] as $file) {
                        File::create([
                            'name'            => $file['name'],
                            'mime_type'       => $file['mime_type'],
                            'uploaded_by'     => $file['uploaded_by'],
                            'size'	          => $file['size'],
                            'uploadable_type' => $file['uploadable_type'],
                            'uploadable_id'   => $model->id,
                            'identifier'      => $file['identifier'],
                            'url'             => $file['url']
                        ]);
                    }
                }
                foreach ($ServiceFaqs as $ServiceFaq) {
                    ServiceFaq::create([
                        'title_en'       => $ServiceFaq['title_en'],
                        'title_ar'       => $ServiceFaq['title_ar'],
                        'description_en' => $ServiceFaq['description_en'],
                        'description_ar' => $ServiceFaq['description_ar'],
                        'status'         => true,
                        'service_id'     => $model->id,
                        'sort'           => $ServiceFaq['sort'],
                    ]);
                }
                
                // Create video for each service
                $video = ServiceVideo::create([
                    'service_id'     => $model->id,
                    'youtube_url'    => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', // Example YouTube URL
                    'title_ar'       => 'شاهد ورشة التمثيل في العمل',
                    'title_en'       => 'Watch Our Acting Workshop in Action',
                    'description_ar'  => 'شاهد كيف نعمل في ورش التمثيل الخاصة بنا. تعرف على بيئة التدريب والتفاعل بين المدربين والمشاركين.',
                    'description_en' => 'Watch how we work in our acting workshops. Learn about the training environment and interaction between trainers and participants.',
                    'status'         => true,
                ]);
                
                // Add thumbnail image for video
                File::create([
                    'name'            => 'video.jpg',
                    'mime_type'       => 'image/jpeg',
                    'uploaded_by'     => 1,
                    'size'            => 50000,
                    'uploadable_type' => ServiceVideo::class,
                    'uploadable_id'   => $video->id,
                    'identifier'      => 'thumbnail',
                    'url'             => '/website/img/video.jpg'
                ]);
            

            }

    }
}
