<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\File;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            [
                'name_ar' => 'شريك ورش التمثيل الأول',
                'name_en' => 'Acting Workshop Partner 1',
                'url' => 'https://example.com',
                'status' => 1,
                'media' => [
                    [
                        'name'            => 'Client 1',
                        'mime_type'       => 'image/jpeg',
                        'uploaded_by'     => 1,
                        'size'	          => 50000,
                        'uploadable_type' => Client::class,
                        'url'             => '/website/img/clients/icon01.jpg'
                    ]
                ]
            ],
            [
                'name_ar' => 'شريك ورش التمثيل الثاني',
                'name_en' => 'Acting Workshop Partner 2',
                'url' => 'https://example.com',
                'status' => 1,
                'media' => [
                    [
                        'name'            => 'Client 2',
                        'mime_type'       => 'image/jpeg',
                        'uploaded_by'     => 1,
                        'size'	          => 50000,
                        'uploadable_type' => Client::class,
                        'url'             => '/website/img/clients/icon02.jpg'
                    ]
                ]
            ],
            [
                'name_ar' => 'شريك ورش التمثيل الثالث',
                'name_en' => 'Acting Workshop Partner 3',
                'url' => 'https://example.com',
                'status' => 1,
                'media' => [
                    [
                        'name'            => 'Client 3',
                        'mime_type'       => 'image/jpeg',
                        'uploaded_by'     => 1,
                        'size'	          => 50000,
                        'uploadable_type' => Client::class,
                        'url'             => '/website/img/clients/icon03.jpg'
                    ]
                ]
            ],
            [
                'name_ar' => 'شريك ورش التمثيل الرابع',
                'name_en' => 'Acting Workshop Partner 4',
                'url' => 'https://example.com',
                'status' => 1,
                'media' => [
                    [
                        'name'            => 'Client 4',
                        'mime_type'       => 'image/jpeg',
                        'uploaded_by'     => 1,
                        'size'	          => 50000,
                        'uploadable_type' => Client::class,
                        'url'             => '/website/img/clients/icon04.jpg'
                    ]
                ]
            ],
            [
                'name_ar' => 'شريك ورش التمثيل الخامس',
                'name_en' => 'Acting Workshop Partner 5',
                'url' => 'https://example.com',
                'status' => 1,
                'media' => [
                    [
                        'name'            => 'Client 5',
                        'mime_type'       => 'image/jpeg',
                        'uploaded_by'     => 1,
                        'size'	          => 50000,
                        'uploadable_type' => Client::class,
                        'url'             => '/website/img/clients/icon05.jpg'
                    ]
                ]
            ],
        ];

        foreach ($clients as $clientData) {
            $media = $clientData['media'];
            unset($clientData['media']);

            $client = Client::create($clientData);

            foreach ($media as $mediaItem) {
                File::create($mediaItem + ['uploadable_id' => $client->id]);
            }
        }
    }
}
