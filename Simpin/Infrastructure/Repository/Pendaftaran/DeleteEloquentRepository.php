<?php

namespace Simpin\Infrastructure\Repository\Pendaftaran;

use Simpin\Infrastructure\Repository\Anggota\AnggotaEloquentRepository;
use Simpin\Domain\Repository\Pendaftaran\DeleteRepository;

class DeleteEloquentRepository implements DeleteRepository
{
    public function delete($id){
        $anggota = AnggotaEloquentRepository::findOrFail($id);
        
        foreach ($anggota->simpanan as $simpanan) {
            $simpanan->delete();
        }
        foreach ($anggota->pinjaman as $pinjaman) {            
            foreach ($pinjaman->cicilan as $cicilan) {
                $cicilan->delete();
            }
            foreach ($pinjaman->jaminan as $jaminan) {
                $jaminan->delete();
            }
            $pinjaman->delete();
        }

        return $anggota;
    }
}
