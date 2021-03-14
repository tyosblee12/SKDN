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
            ),
            array(
                'nim' => '172101034',
                'id_kelas' => 'K001',
                'id_jurusan' => 'J001',
                'nm_mhs' => 'Setyo Dwi Cahyo',
                'alamat' => 'Komp Nusa Persada No.H3 Rt.03 Rw.13 Cimahi',
                'no_telp' => '085624400593',
                'email' => 'kirimemail@keemail.me',
                'TA' => Carbon::parse('2017-01-01'),
                'status' => 1
            ),
            array(
                'nim' => '172101111',
                'id_kelas' => 'K001',
                'id_jurusan' => 'J001',
                'nm_mhs' => 'Septianus Cahyadi',
                'alamat' => 'Jl. Kampus II No.19 Babakansari Kiaracondong',
                'no_telp' => '083821089105',
                'email' => 'septinuscahyadi@gmail.com',
                'TA' => Carbon::parse('2017-01-01'),
                'status' => 1
            ),
            array(
                'nim' => '172101112',
                'id_kelas' => 'K001',
                'id_jurusan' => 'J001',
                'nm_mhs' => 'Sandy Akhmad Ramdiansyah',
                'alamat' => 'Jl. Kampus II No.19 Babakansari Kiaracondong',
                'no_telp' => '083821089105',
                'email' => 'sandyaram@gmail.com',
                'TA' => Carbon::parse('2017-01-01'),
                'status' => 1
            ),
            array(
                'nim' => '172101114',
                'id_kelas' => 'K001',
                'id_jurusan' => 'J001',
                'nm_mhs' => 'Rayci Muhcidfudin',
                'alamat' => 'Jl. Kampus II No.19 Babakansari Kiaracondong',
                'no_telp' => '083821089105',
                'email' => 'raycim1996@gmail.com',
                'TA' => Carbon::parse('2017-01-01'),
                'status' => 1
            ),
            array(
                'nim' => '172101115',
                'id_kelas' => 'K001',
                'id_jurusan' => 'J001',
                'nm_mhs' => 'Randy Yohanes Sihombing',
                'alamat' => 'Jl. Kampus II No.19 Babakansari Kiaracondong',
                'no_telp' => '083821089105',
                'email' => 'randyys@gmail.com',
                'TA' => Carbon::parse('2017-01-01'),
                'status' => 1
            ),
            array(
                'nim' => '172101116',
                'id_kelas' => 'K001',
                'id_jurusan' => 'J001',
                'nm_mhs' => 'Muhammad Abdullah Alghifari',
                'alamat' => 'Jl. Kampus II No.19 Babakansari Kiaracondong',
                'no_telp' => '083821089105',
                'email' => 'bogel@gmail.com',
                'TA' => Carbon::parse('2017-01-01'),
                'status' => 1
            ),
            array(
                'nim' => '172101117',
                'id_kelas' => 'K001',
                'id_jurusan' => 'J001',
                'nm_mhs' => 'Aldi Wijaya Yusuf',
                'alamat' => 'Jl. Kampus II No.19 Babakansari Kiaracondong',
                'no_telp' => '083821089105',
                'email' => 'aldiwy@gmail.com',
                'TA' => Carbon::parse('2017-01-01'),
                'status' => 1
            )
            ));
    }
}