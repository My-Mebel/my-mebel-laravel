<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CountriesTableSeeder extends Seeder
{
    public function run()
    {
        $countries = [
            ['id' => 1, 'country_code' => 'BN', 'country_name' => 'Brunei Darussalam', 'status' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'country_code' => 'KH', 'country_name' => 'Cambodia', 'status' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 3, 'country_code' => 'ID', 'country_name' => 'Indonesia', 'status' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 4, 'country_code' => 'LA', 'country_name' => 'Lao People\'s Democratic Republic', 'status' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 5, 'country_code' => 'MY', 'country_name' => 'Malaysia', 'status' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 6, 'country_code' => 'MM', 'country_name' => 'Myanmar', 'status' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 7, 'country_code' => 'PH', 'country_name' => 'Philippines', 'status' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 8, 'country_code' => 'SG', 'country_name' => 'Singapore', 'status' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 9, 'country_code' => 'TH', 'country_name' => 'Thailand', 'status' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 10, 'country_code' => 'VN', 'country_name' => 'Vietnam', 'status' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        DB::table('countries')->insert($countries);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
