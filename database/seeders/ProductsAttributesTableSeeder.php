<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsAttributesTableSeeder extends Seeder
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
        $productAttributesRecords = [
            // Note: The three attributes we will insert ALL are related to one product (T-shirt): small, medium and large sizes of one T-shirt
            [
                'id'         => 1,
                'product_id' => 1,
                'size'       => 'Small',
                'price'      => 150000,
                'stock'      => 10,
                'sku'        => 'TC001-S', // SKU is similar to Product Code then hypen -Size (which is S here which means 'small' size)
                'status'     => 1
            ],
            [
                'id'         => 2,
                'product_id' => 1,
                'size'       => 'Medium',
                'price'      => 160000,
                'stock'      => 15,
                'sku'        => 'TC001-M', // SKU is similar to Product Code then hypen -Size (which is S here which means 'medium' size)
                'status'     => 1
            ],
            [
                'id'         => 3,
                'product_id' => 1,
                'size'       => 'Large',
                'price'      => 170000,
                'stock'      => 20,
                'sku'        => 'TC001-L', // SKU is similar to Product Code then hypen -Size (which is S here which means 'large' size)
                'status'     => 1
            ],
            [
                'id'         => 4,
                'product_id' => 2,
                'size'       => 'Small',
                'price'      => 100000,
                'stock'      => 10,
                'sku'        => 'CC001-S', // SKU is similar to Product Code then hypen -Size (which is S here which means 'small' size)
                'status'     => 1
            ],
            [
                'id'         => 5,
                'product_id' => 2,
                'size'       => 'Medium',
                'price'      => 110000,
                'stock'      => 15,
                'sku'        => 'CC001-M', // SKU is similar to Product Code then hypen -Size (which is S here which means 'medium' size)
                'status'     => 1
            ],
            [
                'id'         => 6,
                'product_id' => 2,
                'size'       => 'Large',
                'price'      => 120000,
                'stock'      => 20,
                'sku'        => 'CC001-L', // SKU is similar to Product Code then hypen -Size (which is S here which means 'large' size)
                'status'     => 1
            ],
            [
                'id'         => 7,
                'product_id' => 3,
                'size'       => 'Small',
                'price'      => 300000,
                'stock'      => 10,
                'sku'        => 'WW001-S', // SKU is similar to Product Code then hypen -Size (which is S here which means 'small' size)
                'status'     => 1
            ],
            [
                'id'         => 8,
                'product_id' => 3,
                'size'       => 'Medium',
                'price'      => 320000,
                'stock'      => 15,
                'sku'        => 'WW001-M', // SKU is similar to Product Code then hypen -Size (which is S here which means 'medium' size)
                'status'     => 1
            ],
            [
                'id'         => 9,
                'product_id' => 3,
                'size'       => 'Large',
                'price'      => 340000,
                'stock'      => 20,
                'sku'        => 'WW001-L', // SKU is similar to Product Code then hypen -Size (which is S here which means 'large' size)
                'status'     => 1
            ],
        ];



        // Note: Check DatabaseSeeder.php
        \App\Models\ProductsAttribute::insert($productAttributesRecords);
    }
}
