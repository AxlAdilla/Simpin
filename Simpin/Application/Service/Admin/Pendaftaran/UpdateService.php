<?php

namespace Simpin\Application\Service\Admin\Pendaftaran;

use App;

use Simpin\Domain\Repository\Pendaftaran\UpdateRepository;

class UpdateService
{
    private $anggota;
    private $id;
    private $request;
    public function __construct($request,$id){
        $this->id = $id;
        $this->request = $request;
        $this->anggota = App::make('Simpin\Domain\Repository\Pendaftaran\UpdateRepository');
    }
    
    public function execute(){
        return $this->anggota->update($this->request,$this->id);
    }
}