<?php

namespace Simpin\Infrastructure\Repository\Akun;

use App\User;
use Simpin\Domain\Repository\Akun\DeleteRepository;

class DeleteEloquentRepository implements DeleteRepository
{
    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return $user;
    }
}
