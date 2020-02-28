<?php

namespace Simpin\Infrastructure\Repository\Pendaftaran;

use Simpin\Infrastructure\Repository\Anggota\AnggotaEloquentRepository;
use Simpin\Domain\Repository\Pendaftaran\ShowRepository;

class ShowEloquentRepository implements ShowRepository
{
    public function show($id){
        return AnggotaEloquentRepository::findOrFail($id);
    }
}
