<?php

namespace Simpin\Infrastructure\Repository\BuatJaminan;

use Simpin\Infrastructure\Repository\Jaminan\JaminanEloquentRepository;
use Simpin\Domain\Repository\BuatJaminan\EditRepository;

class EditEloquentRepository implements EditRepository
{
    public function edit($id){
        return JaminanEloquentRepository::findOrFail($id);
    }
}
