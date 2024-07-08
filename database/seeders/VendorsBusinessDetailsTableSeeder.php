<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorsBusinessDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Note: Check DatabaseSeeder.php
        $vendorsBusinessDetailsRecords = [
            [
                'id'                      => 1,
                'vendor_id'               => 1,
                'shop_name'               => 'Teknik Informatika',
                'shop_address'            => 'Keputih',
                'shop_city'               => 'Surabaya',
                'shop_state'              => 'East Java',
                'shop_country'            => 'Indonesia',
                'shop_pincode'            => '60117',
                'shop_mobile'             => '0315939212',
                'shop_website'            => 'its.ac.id',
                'shop_email'              => 'tinformatika@its.ac.id',
                'address_proof'           => 'Passport',
                'address_proof_image'     => 'test.jpg',
                'business_license_number' => '1234556',
                'gst_number'              => '446444664',
                'pan_number'              => '2135446',
            ],
        ];
        // Note: Check DatabaseSeeder.php
        \App\Models\VendorsBusinessDetail::insert($vendorsBusinessDetailsRecords);
    }
}
