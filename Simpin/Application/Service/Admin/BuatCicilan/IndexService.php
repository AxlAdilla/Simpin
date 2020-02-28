<?php

namespace Simpin\Application\Service\Admin\BuatCicilan;

use App;

use Simpin\Domain\Repository\BuatCicilan\IndexRepository;

class IndexService
{
    private $cicilan;
    public function __construct(){
        $this->cicilan = App::make('Simpin\Domain\Repository\BuatCicilan\IndexRepository');
    }
    
    public function execute(){
        return $this->cicilan->index();
    }
}