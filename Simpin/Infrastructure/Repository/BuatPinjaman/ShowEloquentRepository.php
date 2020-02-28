<?php

namespace Simpin\Infrastructure\Repository\BuatPinjaman;

use Simpin\Infrastructure\Repository\Pinjaman\PinjamanEloquentRepository;
use Simpin\Domain\Repository\BuatPinjaman\ShowRepository;

class ShowEloquentRepository implements ShowRepository
{
    public function show($id){
        return PinjamanEloquentRepository::findOrFail($id);
    }
}
