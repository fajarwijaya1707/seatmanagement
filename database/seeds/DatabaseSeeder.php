<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($x = 1; $x <= 50; $x++){
            $rand_nim = 1 . rand(0,5) . rand(10,89) . 0 . 0 . rand(10,99);

            DB::table('mahasiswa')->insert([
                'nim' => $rand_nim,
                'nama' => $faker->name,
                'prodi' => $faker->numberBetween(1,9),
                'fakultas' => $faker->numberBetween(1,8)
            ]);
        }
    }
}
