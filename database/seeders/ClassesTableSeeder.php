<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('class_models')->insert([
            ['mentor_id' => 1, 'name' => 'Kelas A'],
            ['mentor_id' => 1, 'name' => 'Kelas B'],
            ['mentor_id' => 1, 'name' => 'Kelas C'],
            ['mentor_id' => 2, 'name' => 'Kelas D'],
            ['mentor_id' => 2, 'name' => 'Kelas E'],
        ]);
    }
}
