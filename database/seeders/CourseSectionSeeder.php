<?php

namespace Database\Seeders;

use App\Models\CourseSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseSection::factory()
            ->count(1000)
            ->create();
    }
}
