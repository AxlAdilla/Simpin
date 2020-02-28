<?php

namespace Simpin\UI\Web\Controllers\Manajer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Simpin\Application\Service\Admin\Pendaftaran\ShowService;
use Simpin\Application\Service\Admin\Pendaftaran\ShowRangeService;
use Simpin\Application\Service\Admin\Pendaftaran\IndexService;
use Simpin\Application\Service\Admin\Pendaftaran\IndexRangeService;
use Simpin\Application\Service\Admin\Pendaftaran\CreateService;
use Simpin\Application\Service\Admin\Pendaftaran\DeleteService;
use Simpin\Application\Service\Admin\Pendaftaran\UpdateService;
use Simpin\Application\Service\Admin\Pendaftaran\EditService;
use Simpin\Application\Service\Admin\Pendaftaran\StoreService;
use PDF;

class PendaftaranController extends Controller
{
    public function index()
    {
        $indexService = new IndexService();
        return view('Manajer.Pendaftaran.dashboard',['data'=>$indexService->execute()]);

    }

    public function index_range($range)
    {
        $indexRangeService = new IndexRangeService($range);
        return view('Manajer.Pendaftaran.dashboard',['data'=>$indexRangeService->execute()]);

    }

    public function index_print()
    {
        $indexPrintService = new IndexService();
        $data = $indexPrintService->execute(); 
        $pdf = PDF::loadview('Manajer.Pendaftaran.laporan',compact(['data']))->setPaper('a4', 'landscape');
        return $pdf->download('laporan_anggota_'.date('d-m-Y').'.pdf');
    }

    public function index_range_print($range)
    {
        $indexRangePrintService = new IndexRangeService($range);
        $data = $indexRangePrintService->execute(); 
        $pdf = PDF::loadview('Manajer.Pendaftaran.laporan',compact(['data']))->setPaper('a4', 'landscape');
        return $pdf->download('laporan_anggota_'.date('d-m-Y').'.pdf');
    }

    public function create()
    {
        $createService = new CreateService();
        $data = $createService->execute();
        return view('Manajer.Pendaftaran.create',compact(['data']));
    }

    public function store(Request $request)
    {
        $storeService = new StoreService($request);
        $storeService->execute();
        return redirect()->back()->with('notifikasi','Sukses Menambah Anggota')->with('tipe_notifikasi','success'); 
    }

    public function show($id)
    {
        $showService = new ShowService($id);
        $data = $showService->execute();
        return view('Manajer.Pendaftaran.show',compact(['data']));

    }

    public function show_range($id,$range)
    {
        $showRangeService = new ShowRangeService($id,$range);
        $data = $showRangeService->execute();
        return view('Manajer.Pendaftaran.show',compact(['data']));
    }

    public function edit($id)
    {
        $editService = new EditService($id);
        $data = $editService->execute();
        return view('Manajer.Pendaftaran.update',compact(['data']));
    }

    public function update(Request $request, $id)
    {
        $updateService = new UpdateService($request,$id);
        $updateService->execute();
        return redirect()->back()->with('notifikasi','Sukses Merubah Anggota')->with('tipe_notifikasi','success'); 
    }

    public function destroy($id)
    {
        $deleteService = new DeleteService($id);
        $deleteService->execute();
        return redirect()->back()->with('notifikasi','Sukses Menghapus Anggota')->with('tipe_notifikasi','success'); 
    }
}
