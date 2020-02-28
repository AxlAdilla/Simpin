<?php

namespace Simpin\Application\Service\Admin\BuatSimpanan;

use App;

use Simpin\Domain\Repository\BuatSimpanan\ShowRepository;

class ShowService
{
    private $simpanan;
    private $id;
    public function __construct($id){
        $this->id = $id;
        $this->simpanan = App::make('Simpin\Domain\Repository\BuatSimpanan\ShowRepository');
    }
    
    public function execute(){
        return $this->simpanan->show($this->id);
    }
}