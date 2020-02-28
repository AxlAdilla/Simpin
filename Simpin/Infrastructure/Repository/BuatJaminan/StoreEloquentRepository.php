<?php

namespace Simpin\Infrastructure\Repository\BuatJaminan;

use Simpin\Infrastructure\Repository\Jaminan\JaminanEloquentRepository;
use Simpin\Domain\Repository\BuatJaminan\StoreRepository;

class StoreEloquentRepository implements StoreRepository
{   
    public function store($request){
        $jaminan = new JaminanEloquentRepository;
        $jaminan->id_pinjaman = $request->id_pinjaman;
        $jaminan->keterangan= $request->keterangan;
        $jaminan->save();
        return $jaminan;
    }

}
