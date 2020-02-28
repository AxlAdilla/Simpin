<?php

namespace Simpin\Application\Service\Admin\BuatCicilan;

use App;

use Simpin\Domain\Repository\BuatCicilan\UpdateRepository;

class UpdateService
{
    private $cicilan;
    private $id;
    private $request;
    public function __construct($request,$id){
        $this->id = $id;
        $this->request = $request;
        $this->cicilan = App::make('Simpin\Domain\Repository\BuatCicilan\UpdateRepository');
    }
    
    public function execute(){
        return $this->cicilan->update($this->request,$this->id);
    }
}