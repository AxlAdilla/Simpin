<?php

namespace Simpin\Application\Service\Admin\BuatPinjaman;

use App;

use Simpin\Domain\Repository\BuatPinjaman\UpdateRepository;

class UpdateService
{
    private $pinjaman;
    private $id;
    private $request;
    public function __construct($request,$id){
        $this->id = $id;
        $this->request = $request;
        $this->pinjaman = App::make('Simpin\Domain\Repository\BuatPinjaman\UpdateRepository');
    }
    
    public function execute(){
        return $this->pinjaman->update($this->request,$this->id);
    }
}