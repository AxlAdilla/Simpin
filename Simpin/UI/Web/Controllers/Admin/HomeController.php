<?php

namespace Simpin\UI\Web\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Simpin\Application\Service\HomeRangeService;
use Simpin\Application\Service\HomeService;

class HomeController extends Controller
{
    public function index()
    {
        $homeService = new HomeService();
        return view('Admin.dashboard',['data'=>$homeService->execute()]);
    }

    public function index_range($range)
    {
        $homeRangeService = new HomeRangeService($range);
        return view('Admin.dashboard',['data'=>$homeRangeService->execute()]);
    }

}
