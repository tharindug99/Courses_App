<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Course extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Course::factory(10)->create();

        \App\Models\Course::factory()->create([
            'title' => 'Test User',
            'instructor' => 'test@example.com',
            'courseHead' => 'test@example.com',
        ]);
    }
}
