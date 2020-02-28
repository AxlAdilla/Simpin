<?php

namespace Simpin\Application\Service\Admin\Pendaftaran;

use App;

use Simpin\Domain\Repository\Pendaftaran\StoreRepository;

class StoreService
{
    private $anggota;
    private $request;
    public function __construct($request){
        $this->request = $request;
        $this->anggota = App::make('Simpin\Domain\Repository\Pendaftaran\StoreRepository');
    }
    
    public function execute(){
        return $this->anggota->store($this->request);
    }
}