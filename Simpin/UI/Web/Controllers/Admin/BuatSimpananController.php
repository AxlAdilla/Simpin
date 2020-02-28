<?php

namespace Simpin\UI\Web\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Simpin\Application\Service\Admin\BuatSimpanan\ShowService;
use Simpin\Application\Service\Admin\BuatSimpanan\IndexService;
use Simpin\Application\Service\Admin\BuatSimpanan\CreateService;
use Simpin\Application\Service\Admin\BuatSimpanan\IndexRangeService;
use Simpin\Application\Service\Admin\BuatSimpanan\DeleteService;
use Simpin\Application\Service\Admin\BuatSimpanan\UpdateService;
use Simpin\Application\Service\Admin\BuatSimpanan\EditService;
use Simpin\Application\Service\Admin\BuatSimpanan\StoreService;
use PDF;

class BuatSimpananController extends Controller
{
    public function index()
    {
        $indexService = new IndexService();
        $data = $indexService->execute();
        return view('Admin.BuatSimpanan.dashboard',compact(['data']));
    }

    public function index_range($range)
    {
        $indexRangeService = new IndexRangeService($range);
        $data = $indexRangeService->execute();
        return view('Admin.BuatSimpanan.dashboard',compact(['data']));
    }

    public function index_print()
    {
        $indexService = new IndexService();
        $data = $indexService->execute(); 
        $pdf = PDF::loadview('Admin.BuatSimpanan.laporan',compact(['data']))->setPaper('a4', 'landscape');
        return $pdf->download('laporan_simpanan_'.date('d-m-Y').'.pdf');
    }

    public function index_range_print($range)
    {
        $indexRangeService = new IndexRangeService($range);
        $data = $indexRangeService->execute(); 
        $pdf = PDF::loadview('Admin.BuatSimpanan.laporan',compact(['data']))->setPaper('a4', 'landscape');
        return $pdf->download('laporan_simpanan_'.date('d-m-Y').'.pdf');
    }

    public function create()
    {
        $createService = new CreateService();
        $data = $createService->execute();
        return view('Admin.BuatSimpanan.create',compact(['data']));
    }

    public function store(Request $request)
    {
        $storeService = new StoreService($request);
        $storeService->execute();
        return redirect()->back()->with('notifikasi','Sukses Menambah Simpanan')->with('tipe_notifikasi','success');
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
        return view('Admin.BuatSimpanan.update',compact(['data']));
    }

    public function update(Request $request, $id)
    {
        $updateService = new UpdateService($request,$id);
        $updateService->execute();
        return redirect()->back()->with('notifikasi','Sukses Merubah Simpanan')->with('tipe_notifikasi','success');
    }

    public function destroy($id)
    {
        $deleteService = new DeleteService($id);
        $deleteService->execute();
        return redirect()->back()->with('notifikasi','Sukses Menghapus Simpanan')->with('tipe_notifikasi','success');
    }
}
