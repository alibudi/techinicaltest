<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = new Setting();
        $setting->title = 'Optimalkan potensi karyawan Anda dengan Learning Management System (LMS)';
        $setting->image = 'images/1721603537.png';
        $setting->description = "Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang unggul dengan LMS kami!.";
        $setting->certificate = 'Issued Certificate';
        $setting->desc1 = 'Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan.';
        $setting->boarding = 'On Boarding';
        $setting->desc2 = 'Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka bergabung.';
        $setting->demand = 'Training on-demand';
        $setting->desc3 = 'Training On-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda.';
        $setting->save();
    }
}
