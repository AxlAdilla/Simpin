<?php

namespace Simpin\Infrastructure\Repository\BuatCicilan;

use Simpin\Infrastructure\Repository\Cicilan\CicilanEloquentRepository;
use Simpin\Domain\Repository\BuatCicilan\DeleteRepository;

class DeleteEloquentRepository implements DeleteRepository
{
    public function delete($id){
        $pinjaman = CicilanEloquentRepository::findOrFail($id);
        $pinjaman->delete();
        return $pinjaman;
    }
}
