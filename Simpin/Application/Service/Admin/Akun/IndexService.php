<?php

namespace Simpin\Application\Service\Admin\Akun;

use App;

use Simpin\Domain\Repository\Akun\IndexRepository;

class IndexService
{
    private $user;
    public function __construct(){
        $this->user = App::make('Simpin\Domain\Repository\Akun\IndexRepository');
    }
    
    public function execute(){
        return $this->user->index();
    }
}