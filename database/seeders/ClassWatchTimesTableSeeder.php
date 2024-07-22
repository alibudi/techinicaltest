<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassWatchTimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('class_watch_times')->insert([
            ['class_id' => 1, 'user_id' => 1, 'watch_time' => 20],
            ['class_id' => 2, 'user_id' => 1, 'watch_time' => 50],
            ['class_id' => 3, 'user_id' => 1, 'watch_time' => 30],
            ['class_id' => 4, 'user_id' => 2, 'watch_time' => 40],
            ['class_id' => 5, 'user_id' => 2, 'watch_time' => 60],
        ]);
    }
}
