<?php

namespace Simpin\Application\Service\Admin\BuatCicilan;

use App;

use Simpin\Domain\Repository\BuatCicilan\StoreRepository;

class StoreService
{
    private $cicilan;
    private $request;
    public function __construct($request){
        $this->request = $request;
        $this->cicilan = App::make('Simpin\Domain\Repository\BuatCicilan\StoreRepository');
    }
    
    public function execute(){
        return $this->cicilan->store($this->request);
    }
}