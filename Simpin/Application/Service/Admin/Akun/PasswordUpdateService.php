<?php

namespace Simpin\Application\Service\Admin\Akun;

use App;

use Simpin\Domain\Repository\Akun\PasswordUpdateRepository;

class PasswordUpdateService
{
    private $user;
    private $id;
    private $request;
    public function __construct($request,$id){
        $this->id = $id;
        $this->request = $request;
        $this->user = App::make('Simpin\Domain\Repository\Akun\PasswordUpdateRepository');
    }
    
    public function execute(){
        return $this->user->password_update($this->request,$this->id);
    }
}