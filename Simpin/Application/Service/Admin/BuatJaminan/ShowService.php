<?php

namespace Simpin\Application\Service\Admin\BuatJaminan;

use App;

use Simpin\Domain\Repository\BuatJaminan\ShowRepository;

class ShowService
{
    private $jaminan;
    private $id;
    public function __construct($id){
        $this->id = $id;
        $this->jaminan = App::make('Simpin\Domain\Repository\BuatJaminan\ShowRepository');
    }
    
    public function execute(){
        return $this->jaminan->show($this->id);
    }
}