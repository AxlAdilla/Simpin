<?php

namespace Simpin\Application\Service\Admin\Akun;

use App;

use Simpin\Domain\Repository\Akun\UpdateRepository;

class UpdateService
{
    private $user;
    private $id;
    private $request;
    public function __construct($request,$id){
        $this->id = $id;
        $this->request = $request;
        $this->user = App::make('Simpin\Domain\Repository\Akun\UpdateRepository');
    }
    
    public function execute(){
        return $this->user->update($this->request,$this->id);
    }
}