<?php

namespace Simpin\Infrastructure\Repository\BuatSimpanan;

use Simpin\Infrastructure\Repository\Simpanan\SimpananEloquentRepository;
use Simpin\Domain\Repository\BuatSimpanan\ShowByAnggotaRepository;
use Illuminate\Database\Eloquent\Builder;
use Simpin\Domain\Model\RangeValueObject;

class ShowByAnggotaEloquentRepository implements ShowByAnggotaRepository
{
    public function show($id_anggota){
        return SimpananEloquentRepository::where('id_anggota',$id_anggota)->get()->sortByDesc('id');
    }
    public function range($id_anggota,$range){
        $this->rangeValueObject = new RangeValueObject($range);
        $start = $this->rangeValueObject->getStart();
        $end = $this->rangeValueObject->getEnd(); 
        return SimpananEloquentRepository::where('id_anggota',$id_anggota)->whereBetween('created_at',[$start,$end])->get()->sortByDesc('id');
    }
}
