<?php

namespace Simpin\Application\Service\Admin\BuatJaminan;

use App;

use Simpin\Domain\Repository\BuatJaminan\IndexRepository;

class IndexRangeService
{
    private $jaminan;
    private $range;
    public function __construct($range){
        $this->jaminan = App::make('Simpin\Domain\Repository\BuatJaminan\IndexRepository');
        $this->range = $range;
    }
    
    public function execute(){
        return $this->jaminan->range($this->range);
    }
}