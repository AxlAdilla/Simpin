<?php

namespace Simpin\Application\Service\Admin\BuatCicilan;

use App;

use Simpin\Domain\Repository\BuatCicilan\IndexRepository;

class IndexRangeService
{
    private $cicilan;
    private $range;
    public function __construct($range){
        $this->cicilan = App::make('Simpin\Domain\Repository\BuatCicilan\IndexRepository');
        $this->range = $range;
    }
    
    public function execute(){
        return $this->cicilan->range($this->range);
    }
}