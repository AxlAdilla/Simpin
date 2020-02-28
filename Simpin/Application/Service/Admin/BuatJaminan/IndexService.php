<?php

namespace Simpin\Application\Service\Admin\BuatJaminan;

use App;

use Simpin\Domain\Repository\BuatJaminan\IndexRepository;

class IndexService
{
    private $jaminan;
    public function __construct(){
        $this->jaminan = App::make('Simpin\Domain\Repository\BuatJaminan\IndexRepository');
    }
    
    public function execute(){
        return $this->jaminan->index();
    }
}