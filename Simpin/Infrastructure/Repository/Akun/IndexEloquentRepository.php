<?php

namespace Simpin\Infrastructure\Repository\Akun;

use App\User;
use Simpin\Domain\Repository\Akun\IndexRepository;
use Simpin\Domain\Model\RangeValueObject;

class IndexEloquentRepository implements IndexRepository
{
    public function index(){
        return User::all()->sortByDesc('id');
    }
    public function range($range){
        $this->rangeValueObject = new RangeValueObject($range);
        $start = $this->rangeValueObject->getStart();
        $end = $this->rangeValueObject->getEnd();  
        return User::whereBetween('created_at',[$start,$end])->get()->sortByDesc('id');
    }
}
