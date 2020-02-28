<?php

namespace Simpin\Infrastructure\Repository\Pendaftaran;

use Simpin\Infrastructure\Repository\Anggota\AnggotaEloquentRepository;
use Simpin\Domain\Repository\Pendaftaran\IndexRepository;
use Simpin\Domain\Model\RangeValueObject;

class IndexEloquentRepository implements IndexRepository
{
    private $rangeValueObject;
    public function index(){
        return AnggotaEloquentRepository::all()->sortByDesc('id');
    }
    public function range($range){
        $this->rangeValueObject = new RangeValueObject($range);
        $start = $this->rangeValueObject->getStart();
        $end = $this->rangeValueObject->getEnd();
        return AnggotaEloquentRepository::whereBetween('created_at',[$start,$end])->get()->sortByDesc('id');
    }
}
