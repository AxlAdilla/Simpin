<?php

namespace Simpin\Infrastructure\Repository\BuatJaminan;

use Simpin\Infrastructure\Repository\Jaminan\JaminanEloquentRepository;
use Simpin\Domain\Repository\BuatJaminan\ShowRepository;

class ShowEloquentRepository implements ShowRepository
{
    public function show($id){
        return JaminanEloquentRepository::findOrFail($id);
    }
}
