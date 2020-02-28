<?php

namespace Simpin\Infrastructure\Repository\Akun;

use App\User;
use Simpin\Domain\Repository\Akun\ShowRepository;

class ShowEloquentRepository implements ShowRepository
{
    public function show($id){
        return User::findOrFail($id);
    }
}
