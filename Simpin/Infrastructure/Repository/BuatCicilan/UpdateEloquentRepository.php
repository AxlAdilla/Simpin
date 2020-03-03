<?php

namespace Simpin\Infrastructure\Repository\BuatCicilan;

use Simpin\Infrastructure\Repository\Cicilan\CicilanEloquentRepository;
use Simpin\Domain\Repository\BuatCicilan\UpdateRepository;

class UpdateEloquentRepository implements UpdateRepository
{
    public function update($request,$id){
        $cicilan = CicilanEloquentRepository::findOrFail($id);
        $cicilan->id_pinjaman = $request->id_pinjaman;
        $cicilan->jumlah_cicil= $request->jumlah_cicil;
        $cicilan->save();

        $pinjaman = $cicilan->pinjaman;
        if ($pinjaman->cicilan->sum('jumlah_cicil') >= $pinjaman->jumlah_pinjaman) {
            $status = 'lunas';
        }else {
            $status = 'cicil';
        }

        if ($pinjaman->cicilan->sum('jumlah_cicil') > $pinjaman->jumlah_pinjaman){
            $cicilan->jumlah_cicil= $cicilan->jumlah_cicil-($pinjaman->cicilan->sum('jumlah_cicil')-$pinjaman->jumlah_pinjaman);
            $cicilan->save();
        }

        $pinjaman->status = $status;
        $pinjaman->save();

        return $cicilan;
    }
}
