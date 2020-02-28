<?php

namespace Simpin\Infrastructure\Repository\BuatCicilan;

use Simpin\Infrastructure\Repository\Cicilan\CicilanEloquentRepository;
use Simpin\Domain\Repository\BuatCicilan\EditRepository;

class EditEloquentRepository implements EditRepository
{
    public function edit($id){
        return CicilanEloquentRepository::findOrFail($id);
    }
}
