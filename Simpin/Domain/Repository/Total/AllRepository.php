<?php

namespace Simpin\Domain\Repository\Total;

interface AllRepository
{
    public function total(); 
    public function range($range); 
    public function anggota($id); 
    public function anggota_range($id,$range); 
}
