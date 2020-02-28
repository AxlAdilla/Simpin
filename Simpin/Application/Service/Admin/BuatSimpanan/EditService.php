<?php

namespace Simpin\Application\Service\Admin\BuatSimpanan;

use App;

use Simpin\Domain\Repository\BuatSimpanan\EditRepository;

class EditService
{
    private $anggota;
    private $simpanan;
    private $id;
    public function __construct($id){
        $this->id = $id;
        $this->simpanan = App::make('Simpin\Domain\Repository\BuatSimpanan\EditRepository');
        $this->anggota = App::make('Simpin\Domain\Repository\Pendaftaran\IndexRepository');
    }
    
    public function execute(){
        return ['simpanan'=>$this->simpanan->edit($this->id),'anggota'=>$this->anggota->index()];
    }
}