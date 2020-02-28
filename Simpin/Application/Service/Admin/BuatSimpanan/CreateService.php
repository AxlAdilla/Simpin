<?php

namespace Simpin\Application\Service\Admin\BuatSimpanan;

use App;

use Simpin\Domain\Repository\BuatSimpanan\CreateRepository;

class CreateService
{
    private $anggota;
    private $simpanan;
    public function __construct(){
        $this->simpanan = App::make('Simpin\Domain\Repository\BuatSimpanan\CreateRepository');
        $this->anggota = App::make('Simpin\Domain\Repository\Pendaftaran\IndexRepository');
    }
    
    public function execute(){
        return ['anggota'=>$this->anggota->index(),'simpanan'=>$this->simpanan->create()];
    }
}