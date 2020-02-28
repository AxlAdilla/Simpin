<?php

namespace Simpin\Infrastructure\Repository\BuatPinjaman;

use Simpin\Domain\Repository\BuatPinjaman\BayarStoreRepository;
use Simpin\Infrastructure\Repository\Pinjaman\PinjamanEloquentRepository;
use Simpin\Infrastructure\Repository\Cicilan\CicilanEloquentRepository;

class BayarStoreEloquentRepository implements BayarStoreRepository
{
    public function bayar($request,$id){
        
        $cicilan = new CicilanEloquentRepository;
        $cicilan->id_pinjaman = $id;
        $cicilan->jumlah_cicil= $request->jumlah_cicil;
        $cicilan->save();
        
        $pinjaman = PinjamanEloquentRepository::findOrFail($id);
        if ($pinjaman->cicilan->sum('jumlah_cicil') >= $pinjaman->jumlah_pinjaman) {
            $status = 'lunas';
        }else {
            $status = 'cicil';
        }
        $pinjaman->status = $status;
        $pinjaman->save();
        
        return $cicilan;
    }
}
