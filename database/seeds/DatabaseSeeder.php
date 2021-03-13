<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(MahasiswaSeeder::class);
    }
}