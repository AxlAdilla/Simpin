<?php

use Illuminate\Database\Seeder;

class PinjamanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Simpin\Infrastructure\Repository\Pinjaman\PinjamanEloquentRepository::class,10)->create();
    }
}
