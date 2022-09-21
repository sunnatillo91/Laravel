<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Company1;
use Illuminate\Database\Seeder;

class Company1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company1::factory(100)->create();
        
    }
}
