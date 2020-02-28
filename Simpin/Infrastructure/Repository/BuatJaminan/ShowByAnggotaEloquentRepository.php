<?php

namespace Simpin\Infrastructure\Repository\BuatJaminan;

use Simpin\Infrastructure\Repository\Jaminan\JaminanEloquentRepository;
use Simpin\Domain\Repository\BuatJaminan\ShowByAnggotaRepository;
use Illuminate\Database\Eloquent\Builder;
use Simpin\Domain\Model\RangeValueObject;

class ShowByAnggotaEloquentRepository implements ShowByAnggotaRepository
{
    public function show($id_anggota){
        return JaminanEloquentRepository::whereHas('pinjaman',function(Builder $query) use ($id_anggota){
            $query->where('id_anggota',$id_anggota);
        })->get()->sortByDesc('id');
    }
    public function range($id_anggota,$range){
        $this->rangeValueObject = new RangeValueObject($range);
        $start = $this->rangeValueObject->getStart();
        $end = $this->rangeValueObject->getEnd(); 
        return JaminanEloquentRepository::whereHas('pinjaman',function(Builder $query) use ($id_anggota){
            $query->where('id_anggota',$id_anggota);
        })->whereBetween('created_at',[$start,$end])->get()->sortByDesc('id');
    }
}
