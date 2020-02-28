<?php

namespace Simpin\Infrastructure\Repository\BuatSimpanan;

use Simpin\Infrastructure\Repository\Simpanan\SimpananEloquentRepository;
use Simpin\Domain\Repository\BuatSimpanan\StoreRepository;

class StoreEloquentRepository implements StoreRepository
{   
    public function store($request){
        $simpanan = new SimpananEloquentRepository;
        $simpanan->id_anggota = $request->id_anggota;
        $simpanan->jenis_simpanan= $request->jenis_simpanan;
        $simpanan->jumlah_simpanan= $request->jumlah_simpanan;
        $simpanan->save();
        return $simpanan;
    }

}
