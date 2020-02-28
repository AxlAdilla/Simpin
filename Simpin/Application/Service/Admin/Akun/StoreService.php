<?php

namespace Simpin\Application\Service\Admin\Akun;

use App;

use Simpin\Domain\Repository\Akun\StoreRepository;

class StoreService
{
    private $user;
    private $request;
    public function __construct($request){
        $this->request = $request;
        $this->user = App::make('Simpin\Domain\Repository\Akun\StoreRepository');
    }
    
    public function execute(){
        return $this->user->store($this->request);
    }
}