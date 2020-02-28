<?php

namespace Simpin\Application\Service\Admin\Akun;

use App;

use Simpin\Domain\Repository\Akun\EditRepository;

class EditService
{
    private $user;
    private $id;
    public function __construct($id){
        $this->id = $id;
        $this->user = App::make('Simpin\Domain\Repository\Akun\EditRepository');
    }
    
    public function execute(){
        return $this->user->edit($this->id);
    }
}