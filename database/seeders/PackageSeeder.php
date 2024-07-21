<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Package::create([
            'name' => 'Starter',
            'package_name' => 'LMS + kelas by Kelas.Center',
            'price_per_month' => '159000',
            'diskon' => '1875000',
            'max_users' => 'Up to 5 users',
            'charge_users' => 'No charge per user',
            'max_class_options' => 'Up to 20 pilihan kelas',
            'class_update_frequency' => 'Update pergantian kelas / 3 bulan',
            'certificate_included' => true,
            'free_consultation' => true,
            'dedicated_assistant' => true,
            'full_support' => true,
        ]);

        // Inserting Basic package
        Package::create([
            'name' => 'Basic',
            'package_name' => 'LMS + kelas by Kelas.Center',
            'price_per_month' => '159000',
            'diskon' => '1875000',
            'max_users' => '6-49 users',
            'charge_users' => 'No charge per user',
            'max_class_options' => 'Up to 50 pilihan kelas',
            'class_update_frequency' => 'Update pergantian kelas / 3 bulan',
            'certificate_included' => true,
            'free_consultation' => true,
            'dedicated_assistant' => true,
            'full_support' => true,
        ]);

        // Inserting Pro package
        Package::create([
            'name' => 'Pro',
            'package_name' => 'LMS + kelas by Kelas.Center',
            'price_per_month' => '2900000',
            'diskon' => '3750000',
            'max_users' => '50-100 users',
            'charge_users' => 'No charge per user',
            'max_class_options' => 'All Access Class',
            'class_update_frequency' => 'Update pergantian kelas / 3 bulan',
            'certificate_included' => true,
            'free_consultation' => true,
            'dedicated_assistant' => true,
            'full_support' => true,
        ]);
    }
}
