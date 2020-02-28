<?php

namespace Simpin\Application\Service\Admin\BuatPinjaman;

use App;

use Simpin\Domain\Repository\BuatPinjaman\IndexRepository;

class IndexRangeService
{
    private $pinjaman;
    private $range;
    public function __construct($range){
        $this->pinjaman = App::make('Simpin\Domain\Repository\BuatPinjaman\IndexRepository');
        $this->range = $range;
    }
    
    public function execute(){
        return $this->pinjaman->range($this->range);
    }
}