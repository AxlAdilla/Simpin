<?php

namespace Simpin\Application\Service\Admin\BuatSimpanan;

use App;

use Simpin\Domain\Repository\BuatSimpanan\IndexRepository;

class IndexService
{
    private $simpanan;
    public function __construct(){
        $this->simpanan = App::make('Simpin\Domain\Repository\BuatSimpanan\IndexRepository');
    }
    
    public function execute(){
        return $this->simpanan->index();
    }
}