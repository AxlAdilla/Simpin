<?php

namespace Simpin\Application\Service\Admin\Pendaftaran;

use App;

use Simpin\Domain\Repository\Pendaftaran\IndexRepository;

class IndexService
{
    private $anggotas;
    public function __construct(){
        $this->anggotas = App::make('Simpin\Domain\Repository\Pendaftaran\IndexRepository');
    }
    
    public function execute(){
        return $this->anggotas->index();
    }
}