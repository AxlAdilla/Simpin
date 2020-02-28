<?php

namespace Simpin\Application\Service\Admin\BuatSimpanan;

use App;

use Simpin\Domain\Repository\BuatSimpanan\DeleteRepository;

class DeleteService
{
    private $simpanan;
    private $id;
    public function __construct($id){
        $this->id = $id;
        $this->simpanan = App::make('Simpin\Domain\Repository\BuatSimpanan\DeleteRepository');
    }
    
    public function execute(){
        return $this->simpanan->delete($this->id);
    }
}