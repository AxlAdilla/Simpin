<?php

namespace Simpin\Application\Service\Admin\BuatPinjaman;

use App;

use Simpin\Domain\Repository\BuatPinjaman\BayarStoreRepository;

class BayarStoreService
{
    private $bayarStore;
    private $id;
    private $request;
    public function __construct($request,$id){
        $this->id = $id;
        $this->request = $request;
        $this->bayarStore = App::make('Simpin\Domain\Repository\BuatPinjaman\BayarStoreRepository');
    }
    
    public function execute(){
        return $this->bayarStore->bayar($this->request,$this->id);
    }
}