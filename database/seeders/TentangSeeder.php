<?php

namespace Database\Seeders;

use App\Models\Tentang;
use Illuminate\Database\Seeder;

class TentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tentang::insert([
            'konten_tentang' => 'Program studi ini terkait dengan perencanaan perbaikan, dan instalasi system terintegrasi seperti orang, material informasi, peralatan, dan energy yang dibangun atas pengetahuan dan keahlian khusus dalam bidang matematika, fisika dan ilmu social bersama-sama dengan prinsip dan metode analisi rekaya dan desain untuk mentapkan, memprediksi dan mengevaluasi hasil yang akan dicapai dari suatu system.'
        ]);
    }
}
