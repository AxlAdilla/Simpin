<?php

namespace Simpin\Application\Service\Admin\BuatJaminan;

use App;

use Simpin\Domain\Repository\BuatJaminan\CreateRepository;

class CreateService
{
    private $pinjaman;
    private $jaminan;
    public function __construct(){
        $this->jaminan = App::make('Simpin\Domain\Repository\BuatJaminan\CreateRepository');
        $this->pinjaman = App::make('Simpin\Domain\Repository\BuatPinjaman\IndexRepository');
    }
    
    public function execute(){
        return ['jaminan'=>$this->jaminan->create(),'pinjaman'=>$this->pinjaman->index()];
    }
}