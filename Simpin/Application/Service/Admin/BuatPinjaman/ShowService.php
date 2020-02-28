<?php

namespace Simpin\Application\Service\Admin\BuatPinjaman;

use App;

use Simpin\Domain\Repository\BuatPinjaman\ShowRepository;

class ShowService
{
    private $pinjaman;
    private $id;
    public function __construct($id){
        $this->id = $id;
        $this->pinjaman = App::make('Simpin\Domain\Repository\BuatPinjaman\ShowRepository');
    }
    
    public function execute(){
        return $this->pinjaman->show($this->id);
    }
}