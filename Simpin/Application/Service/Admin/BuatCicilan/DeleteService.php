<?php

namespace Simpin\Application\Service\Admin\BuatCicilan;

use App;

use Simpin\Domain\Repository\BuatCicilan\DeleteRepository;

class DeleteService
{
    private $cicilan;
    private $id;
    public function __construct($id){
        $this->id = $id;
        $this->cicilan = App::make('Simpin\Domain\Repository\BuatCicilan\DeleteRepository');
    }
    
    public function execute(){
        return $this->cicilan->delete($this->id);
    }
}