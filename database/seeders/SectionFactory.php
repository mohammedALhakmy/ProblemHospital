<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionFactory extends Seeder
{

    public function run(): void
    {
        \App\Models\Section::factory()->count(6)->create();
    }
}
