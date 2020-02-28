<?php

namespace Simpin\Infrastructure\Repository\Simpanan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class SimpananEloquentRepository extends Model
{
    use SoftDeletes;
    //
    protected $table = 'simpanans';
    
    public function anggota()
    {
        return $this->belongsTo('Simpin\Infrastructure\Repository\Anggota\AnggotaEloquentRepository','id_anggota');
    }
    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at']);
    }
    public function getUpdatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['updated_at']);
    }
    public function getJenisSimpananAttribute(){
        switch ($this->attributes['jenis_simpanan']) {
            case 'simpanan_pokok':
                $simpanan = "Simpanan Pokok";
                break;
            case 'simpanan_sukarela':
                $simpanan = "Simpanan Sukarela";
                break;
            default:
                $simpanan = "Simpanan Wajib";
                break;
        }
        return $simpanan;
    }
}
