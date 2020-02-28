<?php

namespace Simpin\Infrastructure\Repository\Total;

use Simpin\Infrastructure\Repository\Simpanan\SimpananEloquentRepository;
use Simpin\Domain\Repository\Total\AllRepository;
use Simpin\Domain\Model\RangeValueObject;

class AllEloquentRepository implements AllRepository
{
    public function total(){
        return SimpananEloquentRepository::all()->sum('jumlah_simpanan');
    }
    public function range($range){
        $this->rangeValueObject = new RangeValueObject($range);
        $start = $this->rangeValueObject->getStart();
        $end = $this->rangeValueObject->getEnd();  
        return SimpananEloquentRepository::whereBetween('created_at',[$start,$end])->sum('jumlah_simpanan');
    } 
    public function anggota($id){
        return SimpananEloquentRepository::where('id_anggota',$id)->sum('jumlah_simpanan');
    } 
    public function anggota_range($id,$range){
        $this->rangeValueObject = new RangeValueObject($range);
        $start = $this->rangeValueObject->getStart();
        $end = $this->rangeValueObject->getEnd();  
        return SimpananEloquentRepository::where('id_anggota',$id)->whereBetween('created_at',[$start,$end])->sum('jumlah_simpanan');
    } 
}
