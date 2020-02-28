<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Simpin\Infrastructure\Repository\Cicilan\CicilanEloquentRepository::class, function (Faker $faker) {
    return [
        'id_pinjaman'=>rand(1,10),
        'jumlah_cicil'=>$faker->randomNumber($nbDigits=3),
    ];
});
