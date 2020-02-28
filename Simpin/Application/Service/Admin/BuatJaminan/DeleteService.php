<?php

namespace Simpin\Application\Service\Admin\BuatJaminan;

use App;

use Simpin\Domain\Repository\BuatJaminan\DeleteRepository;

class DeleteService
{
    private $jaminan;
    private $id;
    public function __construct($id){
        $this->id = $id;
        $this->jaminan = App::make('Simpin\Domain\Repository\BuatJaminan\DeleteRepository');
    }
    
    public function execute(){
        return $this->jaminan->delete($this->id);
    }
}