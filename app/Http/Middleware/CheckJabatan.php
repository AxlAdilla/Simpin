<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class CheckJabatan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$jabatan)
    {
        if($jabatan == Auth::user()->jabatan){
            return $next($request);
        }else{
            return redirect()->back()->with('notifikasi','Anda Tidak Memiliki Akses')->with('tipe_notifikasi','warning');
        }
    }
}
