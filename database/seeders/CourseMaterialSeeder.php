<?php

namespace Database\Seeders;

use App\Models\CourseMaterial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseMaterial::factory()
            ->count(5000)
            ->create();
    }
}
