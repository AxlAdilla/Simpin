<?php

namespace Simpin\Infrastructure\Repository\Akun;

use App\User;
use Simpin\Domain\Repository\Akun\UpdateRepository;
use Illuminate\Support\Facades\Hash;

class UpdateEloquentRepository implements UpdateRepository
{
    public function update($request,$id){
        $user = User::findOrFail($id);
        $user->username = $request->username;
        $user->password= Hash::make($request->password);
        $user->jabatan= $request->jabatan;
        $user->save();
        return $user;
    }
}
