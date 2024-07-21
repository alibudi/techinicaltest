<?php

namespace Database\Seeders;

use App\Models\Learning;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LearningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 4; $i++) {
            $learning = new Learning();
            $learning->name = 'Public Speaking : Merdeka Dalam Bicara ' . $i;
            $learning->video = '44x8s3_kWU4'; 
            $learning->description = 'Pandji Pragiwaksono Presenter Televisi & Komika';
            $learning->save();
        }
    }
}
