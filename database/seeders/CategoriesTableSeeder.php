<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
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
        $categoryRecords = [
            [
                'id'                => 1,
                'parent_id'         => 0, // 0 because like Men, Women categories that don't have a prent category
                'section_id'        => 1, // 1 is the parent 'Cloting' section
                'category_name'     => 'Table',
                'category_image'    => '',
                'category_discount' => 0,
                'description'       => 'This is cafe table',
                'url'               => 'table',
                'meta_title'        => '',
                'meta_description'  => '',
                'meta_keywords'     => '',
                'status'            => 1,
            ],
            [
                'id'                => 2,
                'parent_id'         => 0, // 0 because like Men, Women categories that don't have a prent category
                'section_id'        => 2, // 1 is the parent 'Cloting' section
                'category_name'     => 'Chair',
                'category_image'    => '',
                'category_discount' => 0,
                'description'       => 'This is casual chair',
                'url'               => 'chair',
                'meta_title'        => '',
                'meta_description'  => '',
                'meta_keywords'     => '',
                'status'            => 1,
            ],
            [
                'id'                => 3,
                'parent_id'         => 0, // 0 because like Men, Women categories that don't have a prent category
                'section_id'        => 3, // 1 is the parent 'Cloting' section
                'category_name'     => 'Wall',
                'category_image'    => '',
                'category_discount' => 0,
                'description'       => '',
                'url'               => 'dinding',
                'meta_title'        => '',
                'meta_description'  => '',
                'meta_keywords'     => '',
                'status'            => 1,
            ],
        ];

        // Note: Check DatabaseSeeder.php
        \App\Models\Category::insert($categoryRecords);
    }
}
