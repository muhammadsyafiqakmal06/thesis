<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmbilTopikTugasAkhirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ambil_topik_tugas_akhir')->insert([
            'nim_fk_nim' => '001',
            'topik_tugas_akhir_id' => '1',
        ]);

        DB::table('ambil_topik_tugas_akhir')->insert([
            'nim_fk_nim' => '002',
            'topik_tugas_akhir_id' => '1',
        ]);

        DB::table('ambil_topik_tugas_akhir')->insert([
            'nim_fk_nim' => '003',
            'topik_tugas_akhir_id' => '2',
        ]);
    }
}
