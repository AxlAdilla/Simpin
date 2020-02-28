<?php

namespace Simpin\Application\Service\Admin\BuatPinjaman;

use App;

use Simpin\Domain\Repository\BuatPinjaman\IndexRepository;

class IndexService
{
    private $pinjaman;
    public function __construct(){
        $this->pinjaman = App::make('Simpin\Domain\Repository\BuatPinjaman\IndexRepository');
    }
    
    public function execute(){
        return $this->pinjaman->index();
    }
}