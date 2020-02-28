<?php

namespace Simpin\Infrastructure\Repository\BuatJaminan;

use Simpin\Infrastructure\Repository\Jaminan\JaminanEloquentRepository;
use Simpin\Domain\Repository\BuatJaminan\UpdateRepository;

class UpdateEloquentRepository implements UpdateRepository
{
    public function update($request,$id){
        $jaminan = JaminanEloquentRepository::findOrFail($id);
        $jaminan->id_pinjaman = $request->id_pinjaman;
        $jaminan->keterangan= $request->keterangan;
        $jaminan->save();
        return $jaminan;
    }
}
