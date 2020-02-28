<?php

namespace Simpin\Infrastructure\Repository\Akun;

use App\User;
use Simpin\Domain\Repository\Akun\PasswordUpdateRepository;
use Illuminate\Support\Facades\Hash;

class PasswordUpdateEloquentRepository implements PasswordUpdateRepository
{
    public function password_update($request,$id){
        $user = User::findOrFail($id);
        $user->password = Hash::make($request->password);
        $user->save();
        return $user;
    }
}
