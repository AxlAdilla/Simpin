<?php

namespace Simpin\Domain\Repository\Akun;

interface IndexRepository
{
    public function index(); 
    public function range($range);
}
