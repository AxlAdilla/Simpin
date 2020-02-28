<?php

namespace Simpin\Domain\Repository\BuatSimpanan;

interface IndexRepository
{
    public function index(); 
    public function range($range);
}
