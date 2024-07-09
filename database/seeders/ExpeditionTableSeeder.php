<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ExpeditionService;
use App\Models\ExpeditionPacket;

class ExpeditionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $service = [
            ['id' => 1, 'name' => 'JNE', 'base_price' => 10000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Lion', 'base_price' => 15000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Pos', 'base_price' => 20000, 'created_at' => now(), 'updated_at' => now()],
        ];

        $packet = [
            ['id' => 1, 'name' => 'Express', 'price' => 5000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Standart', 'price' => 10000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Same Day', 'price' => 30000, 'created_at' => now(), 'updated_at' => now()],
        ];

        ExpeditionService::insert($service);
        ExpeditionPacket::insert($packet);
    }
}
