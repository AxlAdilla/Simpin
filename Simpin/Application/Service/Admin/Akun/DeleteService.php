<?php

namespace Simpin\Application\Service\Admin\Akun;

use App;

use Simpin\Domain\Repository\Akun\DeleteRepository;

class DeleteService
{
    private $user;
    private $id;
    public function __construct($id){
        $this->id = $id;
        $this->user = App::make('Simpin\Domain\Repository\Akun\DeleteRepository');
    }
    
    public function execute(){
        return $this->user->delete($this->id);
    }
}