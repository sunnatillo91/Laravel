<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\Models\Company;
use App\Models\Laboratory;

class LaboratorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Laboratory::factory(150)->create();
    }
}
