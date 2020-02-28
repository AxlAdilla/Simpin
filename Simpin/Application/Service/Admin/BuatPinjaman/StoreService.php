<?php

namespace Simpin\Application\Service\Admin\BuatPinjaman;

use App;

use Simpin\Domain\Repository\BuatPinjaman\StoreRepository;

class StoreService
{
    private $pinjaman;
    private $request;
    public function __construct($request){
        $this->request = $request;
        $this->pinjaman = App::make('Simpin\Domain\Repository\BuatPinjaman\StoreRepository');
    }
    
    public function execute(){
        return $this->pinjaman->store($this->request);
    }
}