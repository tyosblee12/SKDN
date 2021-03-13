<?php

use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert(array(
            array(
                'id_kelas'   => 'K001',
                'nm_kelas'      => 'Reguler',
                'status' => 1,
            ),
        ));
    }
}
