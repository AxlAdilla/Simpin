<?php

namespace Simpin\Application\Service\Admin\BuatCicilan;

use App;

use Simpin\Domain\Repository\BuatCicilan\EditRepository;

class EditService
{
    private $pinjaman;
    private $cicilan;
    private $id;
    public function __construct($id){
        $this->id = $id;
        $this->cicilan = App::make('Simpin\Domain\Repository\BuatCicilan\EditRepository');
        $this->pinjaman = App::make('Simpin\Domain\Repository\BuatPinjaman\IndexRepository');
    }
    
    public function execute(){
        return ['pinjaman'=>$this->pinjaman->index(),'cicilan'=>$this->cicilan->edit($this->id)];
    }
}