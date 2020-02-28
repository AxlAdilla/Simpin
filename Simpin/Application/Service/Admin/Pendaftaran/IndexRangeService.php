<?php

namespace Simpin\Application\Service\Admin\Pendaftaran;

use App;

use Simpin\Domain\Repository\Pendaftaran\IndexRepository;

class IndexRangeService
{
    private $anggotas;
    private $range;
    public function __construct($range){
        $this->anggotas = App::make('Simpin\Domain\Repository\Pendaftaran\IndexRepository');
        $this->range = $range;
    }
    
    public function execute(){
        return $this->anggotas->range($this->range);
    }
}