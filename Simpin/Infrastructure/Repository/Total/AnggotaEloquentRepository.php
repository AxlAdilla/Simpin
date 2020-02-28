<?php

namespace Simpin\Infrastructure\Repository\Total;

use Simpin\Infrastructure\Repository\Anggota\AnggotaEloquentRepository as AnggotaModel;
use Simpin\Domain\Repository\Total\AnggotaRepository;
use Simpin\Domain\Model\RangeValueObject;

class AnggotaEloquentRepository implements AnggotaRepository
{
    public function total(){
        return AnggotaModel::all()->count();
    }
    public function range($range){
        $this->rangeValueObject = new RangeValueObject($range);
        $start = $this->rangeValueObject->getStart();
        $end = $this->rangeValueObject->getEnd();  
        return AnggotaModel::whereBetween('created_at',[$start,$end])->count();
    } 
}
