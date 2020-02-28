<?php

namespace Simpin\Application\Service\Admin\Akun;

use App;

use Simpin\Domain\Repository\Akun\JabatanUpdateRepository;

class JabatanUpdateService
{
    private $user;
    private $id;
    private $request;
    public function __construct($request,$id){
        $this->id = $id;
        $this->request = $request;
        $this->user = App::make('Simpin\Domain\Repository\Akun\JabatanUpdateRepository');
    }
    
    public function execute(){
        return $this->user->jabatan_update($this->request,$this->id);
    }
}