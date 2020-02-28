<?php 

namespace Simpin\Infrastructure\Repository\Anggota;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class AnggotaEloquentRepository extends Model
{
    use SoftDeletes;
    //
    protected $table = 'anggotas';

    public function user()
    {
        return $this->belongsTo('App\User','id_user');
    }

    public function pinjaman()
    {
        return $this->hasMany('Simpin\Infrastructure\Repository\Pinjaman\PinjamanEloquentRepository','id_anggota');
    }

    public function simpanan()
    {
        return $this->hasMany('Simpin\Infrastructure\Repository\Simpanan\SimpananEloquentRepository','id_anggota');
    }

    public function jaminan()
    {
        return $this->hasManyThrough('Simpin\Infrastructure\Repository\Jaminan\JaminanEloquentRepository','Simpin\Infrastructure\Repository\Pinjaman\PinjamanEloquentRepository','id_anggota','id_peminjaman');
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
