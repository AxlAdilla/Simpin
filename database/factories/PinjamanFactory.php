<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Simpin\Infrastructure\Repository\Pinjaman\PinjamanEloquentRepository::class, function (Faker $faker) {
    switch (rand(0,2)) {
        case 1:
            $status = 'pinjam';
            break;
        case 0:
            $status = 'cicil';
            break;    
        default:
            $status = 'lunas';
            break;
    }
    return [
        'id_anggota'=>1,
        'jumlah_pinjaman'=>$faker->randomNumber(5),
        'tgl_bayar'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'status'=>$status,
    ];
});
