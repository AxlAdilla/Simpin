<?php

namespace Simpin\Infrastructure\Repository\BuatPinjaman;

use Simpin\Infrastructure\Repository\Pinjaman\PinjamanEloquentRepository;
use Simpin\Infrastructure\Repository\Jaminan\JaminanEloquentRepository;
use Simpin\Domain\Repository\BuatPinjaman\StoreRepository;

class StoreEloquentRepository implements StoreRepository
{   
    public function store($request){
        $pinjaman = new PinjamanEloquentRepository;
        $pinjaman->id_anggota = $request->id_anggota;
        $pinjaman->status= "pinjam";
        $pinjaman->tgl_bayar= $request->tgl_bayar;
        $pinjaman->jumlah_pinjaman= $request->jumlah_pinjaman;
        $pinjaman->save();

        $jaminan = new JaminanEloquentRepository;
        $jaminan->id_pinjaman = $pinjaman->id;
        $jaminan->keterangan = $request->keterangan;
        $jaminan->save();

        return $pinjaman;
    }

}
