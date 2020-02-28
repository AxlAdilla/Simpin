<?php

namespace Simpin\Infrastructure\Repository\Akun;

use App\User;
use Simpin\Domain\Repository\Akun\JabatanUpdateRepository;

class JabatanUpdateEloquentRepository implements JabatanUpdateRepository
{
    public function jabatan_update($request,$id){
        $user = User::findOrFail($id);
        $user->jabatan= $request->jabatan;
        $user->save();
        return $user;
    }
}
