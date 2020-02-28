<?php

namespace Simpin\Infrastructure\Repository\BuatCicilan;

use Simpin\Infrastructure\Repository\Cicilan\CicilanEloquentRepository;
use Simpin\Domain\Repository\BuatCicilan\ShowByAnggotaRepository;
use Illuminate\Database\Eloquent\Builder;
use Simpin\Domain\Model\RangeValueObject;


class ShowByAnggotaEloquentRepository implements ShowByAnggotaRepository
{
    public function show($id_anggota){
        return CicilanEloquentRepository::whereHas('pinjaman',function(Builder $query) use ($id_anggota){
            $query->where('id_anggota',$id_anggota);
        })->get()->sortByDesc('id');
    }
    public function range($id_anggota,$range){
        $this->rangeValueObject = new RangeValueObject($range);
        $start = $this->rangeValueObject->getStart();
        $end = $this->rangeValueObject->getEnd(); 
        return CicilanEloquentRepository::whereHas('pinjaman',function(Builder $query) use ($id_anggota){
            $query->where('id_anggota',$id_anggota);
        })->whereBetween('created_at',[$start,$end])->get()->sortByDesc('id');
    }
}
