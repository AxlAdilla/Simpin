<?php

namespace Simpin\Infrastructure\Repository\BuatPinjaman;

use Simpin\Infrastructure\Repository\Pinjaman\PinjamanEloquentRepository;
use Simpin\Domain\Repository\BuatPinjaman\EditRepository;

class EditEloquentRepository implements EditRepository
{
    public function edit($id){
        return PinjamanEloquentRepository::findOrFail($id);
    }
}
