<?php

namespace Simpin\Infrastructure\Repository\Pendaftaran;

use Simpin\Infrastructure\Repository\Anggota\AnggotaEloquentRepository;
use Simpin\Domain\Repository\Pendaftaran\StoreRepository;

class StoreEloquentRepository implements StoreRepository
{   
    public function store($request){
        $anggota = new AnggotaEloquentRepository;
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->alamat= $request->alamat;
        $anggota->save();
        return $anggota;
    }

}
