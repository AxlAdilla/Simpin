<?php

namespace Simpin\Application\Service\Admin\BuatSimpanan;

use App;

use Simpin\Domain\Repository\BuatSimpanan\IndexRangeRepository;

class IndexRangeService
{
    private $simpanan;
    private $range;
    public function __construct($range){
        $this->simpanan = App::make('Simpin\Domain\Repository\BuatSimpanan\IndexRepository');
        $this->range = $range;
    }
    
    public function execute(){
        return $this->simpanan->range($this->range);
    }
}