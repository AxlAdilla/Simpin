<?php

namespace Simpin\Infrastructure\Repository\BuatJaminan;

use Simpin\Infrastructure\Repository\Jaminan\JaminanEloquentRepository;
use Simpin\Domain\Repository\BuatJaminan\DeleteRepository;

class DeleteEloquentRepository implements DeleteRepository
{
    public function delete($id){
        $pinjaman = JaminanEloquentRepository::findOrFail($id);
        $pinjaman->delete();
        return $pinjaman;
    }
}
