<?php

namespace Simpin\Infrastructure\Repository\Akun;

use App\User;
use Simpin\Domain\Repository\Akun\EditRepository;

class EditEloquentRepository implements EditRepository
{
    public function edit($id){
        return User::findOrFail($id);
    }
}
