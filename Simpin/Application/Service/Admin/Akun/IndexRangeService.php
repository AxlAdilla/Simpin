<?php

namespace Simpin\Application\Service\Admin\Akun;

use App;

use Simpin\Domain\Repository\Akun\IndexRepository;

class IndexRangeService
{
    private $user;
    private $range;
    public function __construct($range){
        $this->user = App::make('Simpin\Domain\Repository\Akun\IndexRepository');
        $this->range = $range;
    }
    
    public function execute(){
        return $this->user->range($this->range);
    }
}