<?php

use Illuminate\Database\Seeder;

class JaminanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Simpin\Infrastructure\Repository\Jaminan\JaminanEloquentRepository::class,10)->create();
    }
}
