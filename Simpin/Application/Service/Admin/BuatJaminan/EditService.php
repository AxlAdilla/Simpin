<?php

namespace Simpin\Application\Service\Admin\BuatJaminan;

use App;

use Simpin\Domain\Repository\BuatJaminan\EditRepository;

class EditService
{
    private $pinjaman;
    private $jaminan;
    private $id;
    public function __construct($id){
        $this->id = $id;
        $this->jaminan = App::make('Simpin\Domain\Repository\BuatJaminan\EditRepository');
        $this->pinjaman = App::make('Simpin\Domain\Repository\BuatPinjaman\IndexRepository');
    }
    
    public function execute(){
        return ['pinjaman'=>$this->pinjaman->index(),'jaminan'=>$this->jaminan->edit($this->id)];
    }
}