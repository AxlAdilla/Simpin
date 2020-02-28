<?php

use Illuminate\Database\Seeder;

class CicilanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Simpin\Infrastructure\Repository\Cicilan\CicilanEloquentRepository::class,5)->create();
    }
}
