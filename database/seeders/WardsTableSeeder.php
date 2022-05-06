<?php

namespace Database\Seeders;

use App\Models\Ward;
use Illuminate\Database\Seeder;

class WardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ward::factory('20')->create();
    }
}
