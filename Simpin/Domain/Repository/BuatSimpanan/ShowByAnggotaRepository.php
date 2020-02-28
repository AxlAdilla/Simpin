<?php

namespace Simpin\Domain\Repository\BuatSimpanan;

interface ShowByAnggotaRepository
{
    public function show($id_anggota);
    public function range($id_anggota,$range);
}
