<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
                'id_user'   => 791701,
                'name'      => 'Saila SA',
                'email'     => 'sailasa@gmail.com',
                'password'  => bcrypt('sailasaja'),
            ),
        ));
    }
}
