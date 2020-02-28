<?php

namespace Simpin\Infrastructure\Repository\Cicilan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CicilanEloquentRepository extends Model
{
    use SoftDeletes;
    //
    protected $table = 'cicilans';
    
    public function pinjaman()
    {
        return $this->belongsTo('Simpin\Infrastructure\Repository\Pinjaman\PinjamanEloquentRepository','id_pinjaman');
    }
    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at']);
    }
    public function getUpdatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['updated_at']);
    }
    
}
