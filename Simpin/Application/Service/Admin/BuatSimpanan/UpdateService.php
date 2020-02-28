<?php

namespace Simpin\Application\Service\Admin\BuatSimpanan;

use App;

use Simpin\Domain\Repository\BuatSimpanan\UpdateRepository;

class UpdateService
{
    private $simpanan;
    private $id;
    private $request;
    public function __construct($request,$id){
        $this->id = $id;
        $this->request = $request;
        $this->simpanan = App::make('Simpin\Domain\Repository\BuatSimpanan\UpdateRepository');
    }
    
    public function execute(){
        return $this->simpanan->update($this->request,$this->id);
    }
}