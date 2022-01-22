<?php

namespace Database\Seeders;

use App\Models\VisiMisi;
use Illuminate\Database\Seeder;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VisiMisi::insert([
            'visi' => 'Menjadi  Pusat  Penyediaan sumber daya manusia dibidang Teknik Industri yang kompeten, dapat bersaing, mampu menerapkan, mengembangkan dan merekayasa ilmu pengetahuan dan teknologi khususnya Teknik Industri berbasis teknologi informasi dan berstandar internasional pada Tahun 2025.',
            'misi' => 'Mengembangkan sumber daya manusia yang berkualitas dan bersertifikasi di bidang teknik industri.
            Mengembangkan dan menyebarkan ilmu pengetahuan  dan teknik industri berbasis teknologi informasi dan berstandar internasional.
            Menyelenggarakanlayanan akademik dan sistem pengelolaan program studi sesuai dengan manajemen perguruan tinggi yang berstandar internasional melalui pemanfaatan teknologi informasi dalam lingkungan  budaya akademik  yang kondusif.
            Membentuk kelompok peneliti dan payung penelitian di bidang teknik industri.
            Melakukan pengabdian dari hasil penelitian guna meningkatkan kemandirian masyarakat.
            Menyelenggarakan kerjasama dan kalaborasi dengan pihak lain yang saling menguntungkandengan  stakeholders di dalam maupun luar negeri.'
        ]);
    }
}
