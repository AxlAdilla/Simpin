<?php

namespace Simpin\Application\Service\Admin\BuatJaminan;

use App;

use Simpin\Domain\Repository\BuatJaminan\UpdateRepository;

class UpdateService
{
    private $jaminan;
    private $id;
    private $request;
    public function __construct($request,$id){
        $this->id = $id;
        $this->request = $request;
        $this->jaminan = App::make('Simpin\Domain\Repository\BuatJaminan\UpdateRepository');
    }
    
    public function execute(){
        return $this->jaminan->update($this->request,$this->id);
    }
}