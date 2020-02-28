<?php

namespace Simpin\UI\Web\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Simpin\Application\Service\HomeRangeService;
use Simpin\Application\Service\HomeService;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // dd($request);
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // $user = User::where('username',$request->username)->first();
            // Auth::loginUsingId($user->id);
            // dd(Auth::user()->username);
            if (Auth::user()->jabatan == 'admin') {
                return redirect()->intended(route('dashboard'));
            }else {
                return redirect()->intended(route('manajer.dashboard'));
            }
        }
        return redirect()->back()->with('notifikasi','Gagal Login, Coba Ulangi')->with('tipe_notifikasi','warning');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }

}
