<?php

namespace Simpin\UI\Web\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Simpin\Application\Service\Admin\BuatJaminan\ShowService;
use Simpin\Application\Service\Admin\BuatJaminan\IndexService;
use Simpin\Application\Service\Admin\BuatJaminan\IndexRangeService;
use Simpin\Application\Service\Admin\BuatJaminan\CreateService;
use Simpin\Application\Service\Admin\BuatJaminan\DeleteService;
use Simpin\Application\Service\Admin\BuatJaminan\UpdateService;
use Simpin\Application\Service\Admin\BuatJaminan\EditService;
use Simpin\Application\Service\Admin\BuatJaminan\StoreService;

class BuatJaminanController extends Controller
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
        return view('Admin.BuatJaminan.create',compact(['data']));
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
        return view('Admin.BuatJaminan.update',compact(['data']));
    }

    public function update(Request $request, $id)
    {
        $updateService = new UpdateService($request,$id);
        return $updateService->execute();
    }

    public function destroy($id)
    {
        $deleteService = new DeleteService($id);
        return $deleteService->execute();
    }
}
