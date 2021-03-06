<?php

namespace Simpin\Infrastructure\Repository\BuatSimpanan;

use Simpin\Infrastructure\Repository\Simpanan\SimpananEloquentRepository;
use Simpin\Domain\Repository\BuatSimpanan\IndexRepository;
use Simpin\Domain\Model\RangeValueObject;


class IndexEloquentRepository implements IndexRepository
{
    public function index(){
        return SimpananEloquentRepository::all()->sortByDesc('id');
    }
    public function range($range){
        $this->rangeValueObject = new RangeValueObject($range);
        $start = $this->rangeValueObject->getStart();
        $end = $this->rangeValueObject->getEnd();        
        return SimpananEloquentRepository::whereBetween('created_at',[$start,$end])->get()->sortByDesc('id');
    }
}
