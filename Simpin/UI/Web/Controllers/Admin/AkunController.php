<?php

namespace Simpin\UI\Web\Controllers\Admin;

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
    public function index()
    {
        $indexService = new IndexService();
        $data = $indexService->execute();
        return view('Admin.Akun.dashboard',compact(['data']));

    }

    public function index_range($range)
    {
        $indexRangeService = new IndexRangeService($range);
        $data = $indexRangeService->execute();
        return view('Admin.Akun.dashboard',compact(['data']));
    }

    public function create()
    {
        $createService = new CreateService();
        $data = $createService->execute();
        return view('Admin.Akun.create',compact(['data']));
    }

    public function store(Request $request)
    {
        $storeService = new StoreService($request);
        $storeService->execute();
        return redirect()->back()->with('notifikasi','Sukses Tambah Akun')->with('tipe_notifikasi','success');

    }

    public function show($id)
    {
        $showService = new ShowService($id);
        return $showService->execute();
    }

    public function edit($id)
    {
        $editService = new EditService($id);
        $data = $editService->execute();
        return view('Admin.Akun.update',compact(['data']));
    }

    public function update(Request $request, $id)
    {
        $updateService = new UpdateService($request,$id);
        $updateService->execute();
        return redirect()->back()->with('notifikasi','Sukses Edit Akun')->with('tipe_notifikasi','success');
    }

    public function destroy($id)
    {
        $deleteService = new DeleteService($id);
        $deleteService->execute();
        return redirect()->back()->with('notifikasi','Sukses Hapus Akun')->with('tipe_notifikasi','success');
    }
    public function password($id)
    {
        $showService = new ShowService($id);
        $data = $showService->execute();
        return view('Admin.Akun.password',compact(['data']));
    }
    public function jabatan($id)
    {
        $showService = new ShowService($id);
        $data = $showService->execute();
        return view('Admin.Akun.jabatan',compact(['data']));
    }
    public function password_update(Request $request,$id)
    {
        $passwordUpdateService = new PasswordUpdateService($request,$id);
        $passwordUpdateService->execute();
        return redirect()->back()->with('notifikasi','Sukses Edit Password')->with('tipe_notifikasi','success');
    }
    public function jabatan_update(Request $request,$id)
    {
        $jabatanUpdateService = new JabatanUpdateService($request,$id);
        $jabatanUpdateService->execute();
        return redirect()->back()->with('notifikasi','Sukses Edit Password')->with('tipe_notifikasi','success');
    }
}
