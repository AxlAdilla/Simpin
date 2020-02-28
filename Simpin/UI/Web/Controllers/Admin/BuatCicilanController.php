<?php

namespace Simpin\UI\Web\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Simpin\Application\Service\Admin\BuatCicilan\ShowService;
use Simpin\Application\Service\Admin\BuatCicilan\IndexService;
use Simpin\Application\Service\Admin\BuatCicilan\IndexRangeService;
use Simpin\Application\Service\Admin\BuatCicilan\CreateService;
use Simpin\Application\Service\Admin\BuatCicilan\DeleteService;
use Simpin\Application\Service\Admin\BuatCicilan\UpdateService;
use Simpin\Application\Service\Admin\BuatCicilan\EditService;
use Simpin\Application\Service\Admin\BuatCicilan\StoreService;

class BuatCicilanController extends Controller
{
    public function index()
    {
        $indexService = new IndexService();
        return $indexService->execute();
    }

    public function index_range($range)
    {
        $indexRangeService = new IndexRangeService($range);
        return $indexRangeService->execute();
    }

    public function create()
    {
        $createService = new CreateService();
        $data = $createService->execute();
        return view('Admin.BuatCicilan.create',compact(['data']));
    }

    public function store(Request $request)
    {
        $storeService = new StoreService($request);
        return $storeService->execute();
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
        // dd($data);
        return view('Admin.BuatCicilan.update',compact(['data']));
    }

    public function update(Request $request, $id)
    {
        $updateService = new UpdateService($request,$id);
        $updateService->execute();
        return redirect()->back()->with('notifikasi','Sukses Edit Cicilan')->with('tipe_notifikasi','success');

    }

    public function destroy($id)
    {
        $deleteService = new DeleteService($id);
        return $deleteService->execute();
    }
}
