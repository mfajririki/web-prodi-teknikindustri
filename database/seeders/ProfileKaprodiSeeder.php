<?php

namespace Database\Seeders;

use App\Models\ProfileKaprodi;
use Illuminate\Database\Seeder;

class ProfileKaprodiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfileKaprodi::insert([
            'nama' => 'Ch. Desi Kusmindari, S.T., M.T.',
            'kutipan' => 'Kurikulum Program Studi Teknik Industri berbasis kompetensi. Kurikulum terdiri dari kurikulum nasional dan kurikulum lokal. Program Studi Teknik Industri ditempuh dalam waktu 4 (empat) tahun, yang terbagi atas 8 semester. Beban studi setara dengan 144 sks.'
        ]);
    }
}
