<?php

namespace Simpin\Application\Service\Admin\BuatPinjaman;

use App;

use Simpin\Domain\Repository\BuatPinjaman\EditRepository;

class EditService
{
    private $pinjaman;
    private $anggota;
    private $id;
    public function __construct($id){
        $this->id = $id;
        $this->pinjaman = App::make('Simpin\Domain\Repository\BuatPinjaman\EditRepository');
        $this->anggota = App::make('Simpin\Domain\Repository\Pendaftaran\IndexRepository');
    }
    
    public function execute(){
        return ['anggota'=>$this->anggota->index(),'pinjaman'=>$this->pinjaman->edit($this->id)];
    }
}