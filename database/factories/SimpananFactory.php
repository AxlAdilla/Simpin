<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Simpin\Infrastructure\Repository\Simpanan\SimpananEloquentRepository::class, function (Faker $faker) {
    switch (rand(0,2)) {
        case 1:
            $simpanan = 'simpanan_pokok';
            break;
        case 0:
            $simpanan = 'simpanan_wajib';
            break;    
        default:
            $simpanan = 'simpanan_sukarela';
            break;
    }

    return [
        'id_anggota'=>1,
        'jenis_simpanan'=>$simpanan,
        'jumlah_simpanan'=>$faker->randomNumber($nbDigits=5),
    ];
});
