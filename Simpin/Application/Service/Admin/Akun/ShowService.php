<?php

namespace Simpin\Application\Service\Admin\Akun;

use App;

use Simpin\Domain\Repository\Akun\ShowRepository;

class ShowService
{
    private $user;
    private $id;
    public function __construct($id){
        $this->id = $id;
        $this->user = App::make('Simpin\Domain\Repository\Akun\ShowRepository');
    }
    
    public function execute(){
        return $this->user->show($this->id);
    }
}