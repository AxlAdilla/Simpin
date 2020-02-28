<?php

namespace Simpin\Infrastructure\Repository\BuatPinjaman;

use Simpin\Infrastructure\Repository\Pinjaman\PinjamanEloquentRepository;
use Simpin\Infrastructure\Repository\Jaminan\JaminanEloquentRepository;
use Simpin\Domain\Repository\BuatPinjaman\UpdateRepository;

class UpdateEloquentRepository implements UpdateRepository
{
    public function update($request,$id){
        $pinjaman = PinjamanEloquentRepository::findOrFail($id);
        $pinjaman->id_anggota = $request->id_anggota;
        $pinjaman->status= $request->status;
        $pinjaman->tgl_bayar= $request->tgl_bayar;
        $pinjaman->jumlah_pinjaman= $request->jumlah_pinjaman;
        $pinjaman->save();

        $jaminan = JaminanEloquentRepository::where('id_pinjaman',$id)->first();
        $jaminan->keterangan = $request->keterangan;
        $jaminan->save();
        
        return $pinjaman;
    }
}
