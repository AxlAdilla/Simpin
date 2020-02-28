<?php

namespace Simpin\Infrastructure\Repository\Pendaftaran;

use Simpin\Infrastructure\Repository\Anggota\AnggotaEloquentRepository;
use Simpin\Domain\Repository\Pendaftaran\EditRepository;

class EditEloquentRepository implements EditRepository
{
    public function edit($id){
        return AnggotaEloquentRepository::findOrFail($id);
    }
}
