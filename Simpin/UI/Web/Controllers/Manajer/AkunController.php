<?php

namespace Simpin\UI\Web\Controllers\Manajer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Simpin\Application\Service\Admin\Akun\ShowService;
use Simpin\Application\Service\Admin\Akun\IndexService;
use Simpin\Application\Service\Admin\Akun\IndexRangeService;
use Simpin\Application\Service\Admin\Akun\CreateService;
use Simpin\Application\Service\Admin\Akun\DeleteService;
use Simpin\Application\Service\Admin\Akun\UpdateService;
use Simpin\Application\Service\Admin\Akun\EditService;
use Simpin\Application\Service\Admin\Akun\StoreService;
use Simpin\Application\Service\Admin\Akun\PasswordUpdateService;
use Simpin\Application\Service\Admin\Akun\JabatanUpdateService;

class AkunController extends Controller
{
    public function password($id)
    {
        $showService = new ShowService($id);
        $data = $showService->execute();
        return view('Manajer.Akun.password',compact(['data']));
    }
    public function password_update(Request $request,$id)
    {
        if($request->password != $request->konfirmasi_password){
            return redirect()->back()->with('notifikasi','Password Tidak Sama')->with('tipe_notifikasi','danger');
        }
        $passwordUpdateService = new PasswordUpdateService($request,$id);
        $passwordUpdateService->execute();
        return redirect()->back()->with('notifikasi','Sukses Edit Password')->with('tipe_notifikasi','success');
    }
}
