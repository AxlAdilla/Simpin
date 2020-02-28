<?php

namespace Simpin\Infrastructure\Repository\BuatPinjaman;

use Simpin\Infrastructure\Repository\Pinjaman\PinjamanEloquentRepository;
use Simpin\Domain\Repository\BuatPinjaman\DeleteRepository;

class DeleteEloquentRepository implements DeleteRepository
{
    public function delete($id){
        $pinjaman = PinjamanEloquentRepository::findOrFail($id);
        
        foreach($pinjaman->cicilan as $cicilan){
            $cicilan->delete();
        }
        
        $pinjaman->delete();
        return $pinjaman;
    }
}
