<?php

namespace Simpin\Application\Service\Admin\BuatSimpanan;

use App;

use Simpin\Domain\Repository\BuatSimpanan\StoreRepository;

class StoreService
{
    private $simpanan;
    private $request;
    public function __construct($request){
        $this->request = $request;
        $this->simpanan = App::make('Simpin\Domain\Repository\BuatSimpanan\StoreRepository');
    }
    
    public function execute(){
        return $this->simpanan->store($this->request);
    }
}