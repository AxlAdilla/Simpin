<?php

namespace Simpin\Application\Service\Admin\Akun;

use App;

use Simpin\Domain\Repository\Akun\CreateRepository;

class CreateService
{
    private $user;
    public function __construct(){
        $this->user = App::make('Simpin\Domain\Repository\Akun\CreateRepository');
    }
    
    public function execute(){
        return $this->user->create();
    }
}