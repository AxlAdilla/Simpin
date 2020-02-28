<?php

namespace Simpin\Infrastructure\Repository\Jaminan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class JaminanEloquentRepository extends Model
{
    use SoftDeletes;
    //
    protected $table = 'jaminans';
    
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
