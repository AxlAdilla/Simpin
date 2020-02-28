<?php

namespace Simpin\Application\Service\Admin\BuatJaminan;

use App;

use Simpin\Domain\Repository\BuatJaminan\StoreRepository;

class StoreService
{
    private $jaminan;
    private $request;
    public function __construct($request){
        $this->request = $request;
        $this->jaminan = App::make('Simpin\Domain\Repository\BuatJaminan\StoreRepository');
    }
    
    public function execute(){
        return $this->jaminan->store($this->request);
    }
}