<?php

namespace Simpin\Application\Service\Admin\BuatPinjaman;

use App;

use Simpin\Domain\Repository\BuatPinjaman\CreateRepository;

class CreateService
{
    private $pinjaman;
    private $anggota;
    public function __construct(){
        $this->pinjaman = App::make('Simpin\Domain\Repository\BuatPinjaman\CreateRepository');
        $this->anggota = App::make('Simpin\Domain\Repository\Pendaftaran\IndexRepository');
    }
    
    public function execute(){
        return ['anggota'=>$this->anggota->index(),'pinjaman'=>$this->pinjaman->create()];
    }
}