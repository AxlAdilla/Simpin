<?php

use Illuminate\Database\Seeder;
use Simpin\Infrastructure\Repository\Anggota\AnggotaEloquent;

class AnggotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('anggotas')->insert([
            'nama_anggota'=>$faker->name,
            'alamat'=>$faker->city.' RT.'.rand(1,10).' RW.'.rand(1,10),
        ]);
        factory(Simpin\Infrastructure\Repository\Anggota\AnggotaEloquentRepository::class,10)->create();
    }
}
