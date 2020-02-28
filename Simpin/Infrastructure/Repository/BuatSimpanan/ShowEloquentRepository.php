<?php

namespace Simpin\Infrastructure\Repository\BuatSimpanan;

use Simpin\Infrastructure\Repository\Simpanan\SimpananEloquentRepository;
use Simpin\Domain\Repository\BuatSimpanan\ShowRepository;

class ShowEloquentRepository implements ShowRepository
{
    public function show($id){
        return SimpananEloquentRepository::findOrFail($id);
    }
}
