<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
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
        $productRecords = [
            [
                'id'               => 1,
                'section_id'       => 1,
                'category_id'      => 1,
                'brand_id'         => 1,
                'vendor_id'        => 1,
                'admin_id'         => 2,
                'admin_type'       => 'vendor',
                'product_name'     => 'Cafe Table',
                'product_code'     => 'TC001',
                'product_color'    => 'Blue',
                'product_price'    => 150000,
                'product_discount' => 0,
                'product_weight'   => 500,
                'product_image'    => 'cafe_table.jpg',
                'product_video'    => '',
                'meta_title'       => '',
                'meta_description' => '',
                'meta_keywords'    => '',
                'is_featured'      => 'Yes',
                'status'           => 1,
            ],
            [
                'id'               => 2,
                'section_id'       => 2,
                'category_id'      => 2,
                'brand_id'         => 2,
                'vendor_id'        => 1, // 0 means not a vendor
                'admin_id'         => 2,
                'admin_type'       => 'vendor',
                'product_name'     => 'Casual Chair',
                'product_code'     => 'CC001',
                'product_color'    => 'Red',
                'product_price'    => 100000,
                'product_discount' => 0,
                'product_weight'   => 200,
                'product_image'    => 'casual_chair.jpg',
                'product_video'    => '',
                'meta_title'       => '',
                'meta_description' => '',
                'meta_keywords'    => '',
                'is_featured'      => 'Yes',
                'status'           => 1,
            ],
            [
                'id'               => 3,
                'section_id'       => 3,
                'category_id'      => 3,
                'brand_id'         => 2,
                'vendor_id'        => 2, // 0 means not a vendor
                'admin_id'         => 3,
                'admin_type'       => 'vendor',
                'product_name'     => 'Wooden Wall',
                'product_code'     => 'WW001',
                'product_color'    => 'Brown',
                'product_price'    => 300000,
                'product_discount' => 0,
                'product_weight'   => 200,
                'product_image'    => 'wooden_wall.jpg',
                'product_video'    => '',
                'meta_title'       => '',
                'meta_description' => '',
                'meta_keywords'    => '',
                'is_featured'      => 'Yes',
                'status'           => 1,
            ],
        ];

        // Note: Check DatabaseSeeder.php
        \App\Models\Product::insert($productRecords);
    }
}
