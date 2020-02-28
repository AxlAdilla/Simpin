<?php

namespace Simpin\Application\Service\Admin\Pendaftaran;

use App;

use Simpin\Domain\Repository\Pendaftaran\CreateRepository;

class CreateService
{
    private $anggotas;
    public function __construct(){
        $this->anggotas = App::make('Simpin\Domain\Repository\Pendaftaran\CreateRepository');
    }
    
    public function execute(){
        return $this->anggotas->create();
    }
}