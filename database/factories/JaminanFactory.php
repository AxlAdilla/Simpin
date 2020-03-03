<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Simpin\Infrastructure\Repository\Jaminan\JaminanEloquentRepository::class, function (Faker $faker) {
    switch (rand(0,3)) {
        case 1:
            $jaminan = 'BPKB';
            break;
        case 0:
            $jaminan = 'Sertifikat Rumah';
            break;
        case 2:
            $jaminan = 'Sertifikat Tanah';
            break;
        default:
            $jaminan = 'Emas/Perhiasan';
            break;
    }
    return [
        'id_pinjaman'=>rand(1,10),
        'keterangan'=>$jaminan,
    ];
});
