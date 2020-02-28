<?php

use Illuminate\Database\Seeder;

class SimpananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Simpin\Infrastructure\Repository\Simpanan\SimpananEloquentRepository::class,10)->create();
    }
}
