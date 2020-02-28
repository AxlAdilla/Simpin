<?php

namespace Simpin\Application\Service\Admin\Pendaftaran;

use App;

use Simpin\Domain\Repository\Pendaftaran\EditRepository;

class EditService
{
    private $anggota;
    private $id;
    public function __construct($id){
        $this->id = $id;
        $this->anggota = App::make('Simpin\Domain\Repository\Pendaftaran\EditRepository');
    }
    
    public function execute(){
        return $this->anggota->edit($this->id);
    }
}