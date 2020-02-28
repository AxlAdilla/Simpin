<?php

namespace Simpin\Infrastructure\Repository\Akun;

use App\User;
use Illuminate\Support\Facades\Hash;
use Simpin\Domain\Repository\Akun\StoreRepository;

class StoreEloquentRepository implements StoreRepository
{   
    public function store($request){
        $user = new User;
        $user->username = $request->username;
        $user->password= Hash::make($request->password);
        $user->jabatan= $request->jabatan;
        $user->save();
        return $user;

    }

}
