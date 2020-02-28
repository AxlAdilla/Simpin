<?php

namespace Simpin\Infrastructure\Repository\Total;

use Simpin\Infrastructure\Repository\Pinjaman\PinjamanEloquentRepository as PinjamanModel;
use Simpin\Domain\Repository\Total\PinjamanRepository;
use Simpin\Domain\Model\RangeValueObject;

class PinjamanEloquentRepository implements PinjamanRepository
{
    public function total(){
        return PinjamanModel::all()->sum('jumlah_pinjaman');
    }
    public function range($range){
        $this->rangeValueObject = new RangeValueObject($range);
        $start = $this->rangeValueObject->getStart();
        $end = $this->rangeValueObject->getEnd();  
        return PinjamanModel::whereBetween('created_at',[$start,$end])->sum('jumlah_pinjaman');
    } 
    public function anggota($id){
        return PinjamanModel::where('id_anggota',$id)->sum('jumlah_pinjaman');
    } 
    public function anggota_range($id,$range){
        $this->rangeValueObject = new RangeValueObject($range);
        $start = $this->rangeValueObject->getStart();
        $end = $this->rangeValueObject->getEnd();  
        return PinjamanModel::where('id_anggota',$id)->whereBetween('created_at',[$start,$end])->sum('jumlah_pinjaman');
    } 
}
