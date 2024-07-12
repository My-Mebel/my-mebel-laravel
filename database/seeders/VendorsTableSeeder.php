<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Databas Seeding
        // Note: Check DatabaseSeeder.php
        $vendorRecords = [
            [
                'id'      => 1,
                'name'    => 'Raihan',
                'address' => 'Surabaya',
                'city'    => 'Surabaya',
                'state'   => 'Surabaya',
                'country' => 'Indonesia',
                'pincode' => '111111',
                'mobile'  => '08222222222',
                'email'   => 'vendor@admin.com',
                'status'  => 1,
            ],
            [
                'id'      => 2,
                'name'    => 'Setia',
                'address' => 'Surabaya',
                'city'    => 'Surabaya',
                'state'   => 'Surabaya',
                'country' => 'Indonesia',
                'pincode' => '111111',
                'mobile'  => '08333333333',
                'email'   => 'vendor2@admin.com',
                'status'  => 1,
            ],
        ];

        // Note: Check DatabaseSeeder.php
        \App\Models\Vendor::insert($vendorRecords);
    }
}
