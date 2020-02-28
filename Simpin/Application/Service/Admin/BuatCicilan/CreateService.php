<?php

namespace Simpin\Application\Service\Admin\BuatCicilan;

use App;

use Simpin\Domain\Repository\BuatCicilan\CreateRepository;

class CreateService
{
    private $pinjaman;
    private $cicilan;
    public function __construct(){
        $this->cicilan = App::make('Simpin\Domain\Repository\BuatCicilan\CreateRepository');
        $this->pinjaman = App::make('Simpin\Domain\Repository\BuatPinjaman\IndexRepository');
    }
    
    public function execute(){
        return ['cicilan'=>$this->cicilan->create(),'pinjaman'=>$this->pinjaman->index()];
    }
}