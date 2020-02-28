<?php

namespace Simpin\Domain\Repository\BuatPinjaman;

interface BayarStoreRepository
{
    public function bayar($request,$id);
}
