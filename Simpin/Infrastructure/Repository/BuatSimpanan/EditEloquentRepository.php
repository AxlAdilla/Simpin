<?php

namespace Simpin\Infrastructure\Repository\BuatSimpanan;

use Simpin\Infrastructure\Repository\Simpanan\SimpananEloquentRepository;
use Simpin\Domain\Repository\BuatSimpanan\EditRepository;

class EditEloquentRepository implements EditRepository
{
    public function edit($id){
        return SimpananEloquentRepository::findOrFail($id);
    }
}
