<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::truncate();
        // Create Setting
        $setting = Setting::create([
            'email' => 'info@example.com',
            'mobile' => '0989 7876 9865 9',
            'twitter' => 'https://twitter.com/',
            'instagram' => 'https://www.instagram.com/',
            'facebook' => 'https://www.facebook.com/',
            'linkedin' => 'https://linkedin.com/',
            'address_ar' => "123/أ، مدينة ميراندا ليكاولي <br/> بريكانو، دوب",
            'address_en' => "123/A, Miranda City Likaoli <br/> Prikano, Dope",
            'map' => '<iframe class="iframe-map" src="https://maps.google.com/maps?&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"></iframe>'
        ]);

     }
}
