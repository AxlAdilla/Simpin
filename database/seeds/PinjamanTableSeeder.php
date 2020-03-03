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
        $pinjaman = factory(Simpin\Infrastructure\Repository\Pinjaman\PinjamanEloquentRepository::class,10)->create();

        foreach ($pinjaman as $p) {
          factory(Simpin\Infrastructure\Repository\Jaminan\JaminanEloquentRepository::class)->create([
            'id_pinjaman' => $p->id,
          ]);
        }
    }
}
