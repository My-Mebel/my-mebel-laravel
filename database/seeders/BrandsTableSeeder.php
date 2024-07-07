<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
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
        $brandRecords = [
            ['id' => 1, 'name' => 'Ikea', 'status' => 1],
            ['id' => 2, 'name' => 'Informa', 'status' => 1],
            ['id' => 3, 'name' => 'Ace', 'status' => 1],
            ['id' => 4, 'name' => 'MR DIY', 'status' => 1],
        ];
        // Note: Check DatabaseSeeder.php!
        \App\Models\Brand::insert($brandRecords);
    }
}
