<?php

use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusan')->insert(array(
            array(
                'id_jurusan' => 'J001',
                'nm_jurusan' => 'Teknik Informatika',
                'status' => 1
            )
        ));
    }
}