<?php

namespace Simpin\Infrastructure\Repository\BuatJaminan;

use Simpin\Infrastructure\Repository\Jaminan\JaminanEloquentRepository;
use Simpin\Domain\Repository\BuatJaminan\IndexRepository;
use Simpin\Domain\Model\RangeValueObject;

class IndexEloquentRepository implements IndexRepository
{
    public function index(){
        return JaminanEloquentRepository::all()->sortByDesc('id');
    }
    public function range($range){
        $this->rangeValueObject = new RangeValueObject($range);
        $start = $this->rangeValueObject->getStart();
        $end = $this->rangeValueObject->getEnd();   
        return JaminanEloquentRepository::whereBetween('created_at',[$start,$end])->get()->sortByDesc('id');
    }
}
