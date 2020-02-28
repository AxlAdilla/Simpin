<?php

namespace Simpin\Application\Service\Admin\BuatPinjaman;

use App;

use Simpin\Domain\Repository\BuatPinjaman\BayarRepository;

class BayarService
{
    private $bayar;
    private $pinjaman;
    private $id;
    public function __construct($id){
        $this->id = $id;
        $this->bayar = App::make('Simpin\Domain\Repository\BuatPinjaman\BayarRepository');
        $this->pinjaman = App::make('Simpin\Domain\Repository\BuatPinjaman\ShowRepository');
    }
    
    public function execute(){
        return ['bayar'=>$this->bayar->bayar($this->id),'pinjaman'=>$this->pinjaman->show($this->id)];
    }
}