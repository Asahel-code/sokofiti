<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ads;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ads::factory(14)->create();
    }
}
