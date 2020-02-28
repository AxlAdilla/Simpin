<?php

namespace Simpin\UI\Web\Controllers\Manajer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Simpin\Application\Service\Admin\BuatPinjaman\ShowService;
use Simpin\Application\Service\Admin\BuatPinjaman\BayarService;
use Simpin\Application\Service\Admin\BuatPinjaman\BayarStoreService;
use Simpin\Application\Service\Admin\BuatPinjaman\IndexService;
use Simpin\Application\Service\Admin\BuatPinjaman\IndexRangeService;
use Simpin\Application\Service\Admin\BuatPinjaman\CreateService;
use Simpin\Application\Service\Admin\BuatPinjaman\DeleteService;
use Simpin\Application\Service\Admin\BuatPinjaman\UpdateService;
use Simpin\Application\Service\Admin\BuatPinjaman\EditService;
use Simpin\Application\Service\Admin\BuatPinjaman\StoreService;
use PDF;

class BuatPinjamanController extends Controller
{
    public function index()
    {
        $indexService = new IndexService();
        $data = $indexService->execute();
        return view('Manajer.BuatPinjaman.dashboard',compact(['data']));
    }

    public function index_range($range)
    {
        $indexRangeService = new IndexRangeService($range);
        $data = $indexRangeService->execute();
        return view('Manajer.BuatPinjaman.dashboard',compact(['data']));
    }

    public function index_print()
    {
        $indexService = new IndexService();
        $data = $indexService->execute(); 
        $pdf = PDF::loadview('Manajer.BuatPinjaman.laporan',compact(['data']))->setPaper('a4', 'landscape');
        return $pdf->download('laporan_pinjaman_'.date('d-m-Y').'.pdf');
    }

    public function index_range_print($range)
    {
        $indexRangeService = new IndexRangeService($range);
        $data = $indexRangeService->execute(); 
        $pdf = PDF::loadview('Manajer.BuatPinjaman.laporan',compact(['data']))->setPaper('a4', 'landscape');
        return $pdf->download('laporan_pinjaman_'.date('d-m-Y').'.pdf');
    }

    public function bayar($id)
    {
        $bayarService = new BayarService($id);
        $data = $bayarService->execute(); 
        $data = array_merge(array('id'=>$id),$data);
        return view('Manajer.BuatPinjaman.bayar',compact(['data']));
    }

    public function bayar_store(Request $request, $id)
    {
        $bayarStoreService = new BayarStoreService($request,$id);
        $bayarStoreService->execute();
        return redirect()->back()->with('notifikasi','Sukses Bayar Cicilan')->with('tipe_notifikasi','success'); 
    }

    public function create()
    {
        $createService = new CreateService();
        $data = $createService->execute();
        return view('Manajer.BuatPinjaman.create',compact(['data']));
    }

    public function store(Request $request)
    {
        $storeService = new StoreService($request);
        $storeService->execute();
        return redirect()->back()->with('notifikasi','Sukses Menambah Pinjaman')->with('tipe_notifikasi','success'); 
    }

    public function show($id)
    {
        $showService = new ShowService($id);
        $data = $showService->execute(); 
        return view('Manajer.BuatPinjaman.show',compact(['data']));

    }

    public function edit($id)
    {
        $editService = new EditService($id);
        $data = $editService->execute();
        return view('Manajer.BuatPinjaman.update',compact(['data']));
    }

    public function update(Request $request, $id)
    {
        $updateService = new UpdateService($request,$id);
        $updateService->execute();
        return redirect()->back()->with('notifikasi','Sukses Merubah Pinjaman')->with('tipe_notifikasi','success'); 
    }

    public function destroy($id)
    {
        $deleteService = new DeleteService($id);
        $deleteService->execute();
        return redirect()->back()->with('notifikasi','Sukses Menghapus Pinjaman')->with('tipe_notifikasi','success'); 
    }
}
