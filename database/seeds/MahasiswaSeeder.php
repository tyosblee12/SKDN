<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert(array(
            array(
                'nim' => '172101032',
                'id_kelas' => 'K001',
                'id_jurusan' => 'J001',
                'nm_mhs' => 'Saila Saadiah Amanatillah',
                'alamat' => 'Jl. Kampus II No.19 Babakansari Kiaracondong',
                'no_telp' => '083821089105',
                'email' => 'Saila.sa248@gmail.com',
                'TA' => Carbon::parse('2017-01-01'),
                'status' => 1
            )
            ));
    }
}