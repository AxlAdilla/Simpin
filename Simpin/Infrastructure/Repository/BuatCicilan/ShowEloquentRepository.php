<?php

namespace Simpin\Infrastructure\Repository\BuatCicilan;

use Simpin\Infrastructure\Repository\Cicilan\CicilanEloquentRepository;
use Simpin\Domain\Repository\BuatCicilan\ShowRepository;

class ShowEloquentRepository implements ShowRepository
{
    public function show($id){
        return CicilanEloquentRepository::findOrFail($id);
    }
}
