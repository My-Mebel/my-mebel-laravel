<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //



        // Note: Check DatabaseSeeder.php!
        $bannerRecords = [
            [
                'id'     => 1,
                'image'  => 'banner-1.png',
                'type'   => 'Slider',
                'link'   => 'chair', // e.g. www.our-domainname.com/spring-collection
                'title'  => 'Chair',
                'alt'    => 'Chair',
                'status' => 1
            ],
            [
                'id'     => 2,
                'image'  => 'banner-2.png',
                'type'   => 'Slider',
                'link'   => 'table', // e.g. www.our-domainname.com/Chair
                'title'  => 'Table',
                'alt'    => 'Table',
                'status' => 1
            ],
            [
                'id'     => 3,
                'image'  => 'banner-3.png',
                'type'   => 'Fix',
                'link'   => 'chair',
                'title'  => 'Chair',
                'alt'    => 'Chair',
                'status' => 1
            ],
        ];
        // Note: Check DatabaseSeeder.php!
        \App\Models\Banner::insert($bannerRecords);
    }
}
