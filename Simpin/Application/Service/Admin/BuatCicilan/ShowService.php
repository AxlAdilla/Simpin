<?php

namespace Simpin\Application\Service\Admin\BuatCicilan;

use App;

use Simpin\Domain\Repository\BuatCicilan\ShowRepository;

class ShowService
{
    private $cicilan;
    private $id;
    public function __construct($id){
        $this->id = $id;
        $this->cicilan = App::make('Simpin\Domain\Repository\BuatCicilan\ShowRepository');
    }
    
    public function execute(){
        return $this->cicilan->show($this->id);
    }
}