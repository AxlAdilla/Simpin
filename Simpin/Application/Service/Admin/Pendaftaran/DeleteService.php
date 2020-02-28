<?php

namespace Simpin\Application\Service\Admin\Pendaftaran;

use App;

use Simpin\Domain\Repository\Pendaftaran\DeleteRepository;

class DeleteService
{
    private $anggota;
    private $id;
    public function __construct($id){
        $this->id = $id;
        $this->anggota = App::make('Simpin\Domain\Repository\Pendaftaran\DeleteRepository');
    }
    
    public function execute(){
        return $this->anggota->delete($this->id);
    }
}