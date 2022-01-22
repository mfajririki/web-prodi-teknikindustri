<?php

namespace Database\Seeders;

use App\Models\Tujuans;
use Illuminate\Database\Seeder;

class TujuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tujuans::insert([
            'konten_tujuan' => 'Menyediakan  layanan  pendidikan  berbagai  konsep  ilmu  pengetahuan  dan teknologi  yang  berkualitas;
            Mampu  melakukan  perencanaan   dibidang  industri  dan  melaksanakan pekerjaan  yang  berbasis  industri  dan  produksi;
             Memiliki  kemampuan  berkarya  diberbagai  lapangan  pekerjaan  serta  mampu  menciptakan  lapangan  kerja;
             Memiliki  bekal  dan  kemampuan  untuk  melanjutkan  pendidikan  ke jenjang  yang  lebih  tinggi.'
        ]);
    }
}
