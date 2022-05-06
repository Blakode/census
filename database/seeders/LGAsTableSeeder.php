<?php

namespace Database\Seeders;

use App\Models\LGA;
use Illuminate\Database\Seeder;

class LGAsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LGA::factory(20)->create();
        
    }
}
