<?php

namespace Simpin\Infrastructure\Repository\BuatPinjaman;

use Simpin\Infrastructure\Repository\Pinjaman\PinjamanEloquentRepository;
use Simpin\Domain\Repository\BuatPinjaman\IndexRepository;
use Simpin\Domain\Model\RangeValueObject;

class IndexEloquentRepository implements IndexRepository
{
    public function index(){
        return PinjamanEloquentRepository::with('jaminan')->get()->sortByDesc('id');
    }
    public function range($range){
        $this->rangeValueObject = new RangeValueObject($range);
        $start = $this->rangeValueObject->getStart();
        $end = $this->rangeValueObject->getEnd();
        return PinjamanEloquentRepository::whereBetween('created_at',[$start,$end])->get()->sortByDesc('id');
    }
}
