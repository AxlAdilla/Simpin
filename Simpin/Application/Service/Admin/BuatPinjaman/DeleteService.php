<?php

namespace Simpin\Application\Service\Admin\BuatPinjaman;

use App;

use Simpin\Domain\Repository\BuatPinjaman\DeleteRepository;

class DeleteService
{
    private $pinjaman;
    private $id;
    public function __construct($id){
        $this->id = $id;
        $this->pinjaman = App::make('Simpin\Domain\Repository\BuatPinjaman\DeleteRepository');
    }
    
    public function execute(){
        return $this->pinjaman->delete($this->id);
    }
}