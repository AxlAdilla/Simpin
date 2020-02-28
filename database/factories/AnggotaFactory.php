<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Simpin\Infrastructure\Repository\Anggota\AnggotaEloquentRepository::class, function (Faker $faker) {
    return [
        'nama_anggota'=>$faker->name,
        'alamat'=>$faker->city.' RT.'.rand(1,10).' RW.'.rand(1,10),
    ];
});
