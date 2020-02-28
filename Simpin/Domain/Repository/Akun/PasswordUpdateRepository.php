<?php

namespace Simpin\Domain\Repository\Akun;

interface PasswordUpdateRepository
{
    public function password_update($request,$id); 
}
