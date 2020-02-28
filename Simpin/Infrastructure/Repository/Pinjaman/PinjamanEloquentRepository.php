<?php

namespace Simpin\Infrastructure\Repository\Pinjaman;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PinjamanEloquentRepository extends Model
{
    use SoftDeletes;
    //
    protected $table = 'pinjamans';
    
    public function anggota()
    {
        return $this->belongsTo('Simpin\Infrastructure\Repository\Anggota\AnggotaEloquentRepository','id_anggota');
    }

    public function jaminan()
    {
        return $this->hasOne('Simpin\Infrastructure\Repository\Jaminan\JaminanEloquentRepository','id_pinjaman');
    }

    public function cicilan()
    {
        return $this->hasMany('Simpin\Infrastructure\Repository\Cicilan\CicilanEloquentRepository','id_pinjaman');
    }
    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at']);
    }
    public function getUpdatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['updated_at']);
    }
    public function getTglBayarAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['tgl_bayar']);
    }
    public function getSisaAttribute()
    {
        return $this->attributes['jumlah_pinjaman']-$this->cicilan->sum('jumlah_cicil');
    }
}
