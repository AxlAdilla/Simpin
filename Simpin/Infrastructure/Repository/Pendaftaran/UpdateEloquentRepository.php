<?php

namespace Simpin\Infrastructure\Repository\Pendaftaran;

use Simpin\Infrastructure\Repository\Anggota\AnggotaEloquentRepository;
use Simpin\Domain\Repository\Pendaftaran\UpdateRepository;

class UpdateEloquentRepository implements UpdateRepository
{
    public function update($request,$id){
        $anggota = AnggotaEloquentRepository::findOrFail($id);
        $anggota->nama_anggota=$request->nama_anggota;
        $anggota->alamat=$request->alamat;
        $anggota->save();
        return $anggota;
    }
}
