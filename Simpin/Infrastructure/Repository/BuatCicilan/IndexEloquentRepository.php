<?php

namespace Simpin\Infrastructure\Repository\BuatCicilan;

use Simpin\Infrastructure\Repository\Cicilan\CicilanEloquentRepository;
use Simpin\Domain\Repository\BuatCicilan\IndexRepository;
use Simpin\Domain\Model\RangeValueObject;

class IndexEloquentRepository implements IndexRepository
{
    public function index(){
        return CicilanEloquentRepository::all()->sortByDesc('id');
    }
    public function range($range){
        $this->rangeValueObject = new RangeValueObject($range);
        $start = $this->rangeValueObject->getStart();
        $end = $this->rangeValueObject->getEnd();  
        return CicilanEloquentRepository::whereBetween('created_at',[$start,$end])->get()->sortByDesc('id');
    }
}
