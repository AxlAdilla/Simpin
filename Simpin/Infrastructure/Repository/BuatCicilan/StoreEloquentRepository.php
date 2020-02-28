<?php

namespace Simpin\Infrastructure\Repository\BuatCicilan;

use Simpin\Infrastructure\Repository\Cicilan\CicilanEloquentRepository;
use Simpin\Domain\Repository\BuatCicilan\StoreRepository;

class StoreEloquentRepository implements StoreRepository
{   
    public function store($request){
        $cicilan = new CicilanEloquentRepository;
        $cicilan->id_pinjaman = $request->id_pinjaman;
        $cicilan->jumlah_cicil= $request->jumlah_cicil;
        $cicilan->save();
        return $cicilan;
    }

}
