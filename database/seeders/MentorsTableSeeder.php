<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MentorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mentors')->insert([
            ['name' => 'Mentor A', 'email' => 'mentora@example.com'],
            ['name' => 'Mentor B', 'email' => 'mentorb@example.com'],
        ]);
    }
}
