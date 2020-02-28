<?php

namespace Simpin\Application\Service;

use App;

use Simpin\Domain\Repository\Total\AllRepository;
use Simpin\Domain\Repository\Total\AnggotaRepository;
use Simpin\Domain\Repository\Total\PinjamanRepository;
use Simpin\Domain\Repository\Total\PokokRepository;
use Simpin\Domain\Repository\Total\SukarelaRepository;
use Simpin\Domain\Repository\Total\WajibRepository;
use Simpin\Domain\Repository\BuatCicilan\IndexRepository as BuatCicilanIndexRepository;
use Simpin\Domain\Repository\BuatPinjaman\IndexRepository as BuatPinjamanIndexRepository;
use Simpin\Domain\Repository\BuatSimpanan\IndexRepository as BuatSimpananIndexRepository;
use Simpin\Domain\Repository\BuatAnggota\IndexRepository as BuatAnggotaIndexRepository;

class HomeService
{
    private $totalAll;
    private $totalAnggota;
    private $totalPinjaman;
    private $totalPokok;
    private $totalSukarela;
    private $totalWajib;
    private $historyCicilan;
    private $historyAnggota;
    private $historyPinjaman;
    private $historySimpanan;

    public function __construct(){
        $this->totalAll = App::make('Simpin\Domain\Repository\Total\AllRepository');
        $this->totalAnggota = App::make('Simpin\Domain\Repository\Total\AnggotaRepository');
        $this->totalPinjaman = App::make('Simpin\Domain\Repository\Total\PinjamanRepository');
        $this->totalPokok = App::make('Simpin\Domain\Repository\Total\PokokRepository');
        $this->totalSukarela = App::make('Simpin\Domain\Repository\Total\SukarelaRepository');
        $this->totalWajib = App::make('Simpin\Domain\Repository\Total\WajibRepository');
        $this->historyCicilan = App::make('Simpin\Domain\Repository\BuatCicilan\IndexRepository');
        $this->historyPinjaman = App::make('Simpin\Domain\Repository\BuatPinjaman\IndexRepository');
        $this->historySimpanan = App::make('Simpin\Domain\Repository\BuatSimpanan\IndexRepository');
        $this->historyAnggota = App::make('Simpin\Domain\Repository\Pendaftaran\IndexRepository');
    }
    
    public function execute(){
        return [
        'totalAll'=>$this->totalAll->total(),
        'totalAnggota'=>$this->totalAnggota->total(),
        'totalPinjaman'=>$this->totalPinjaman->total(),
        'totalPokok'=>$this->totalPokok->total(),
        'totalSukarela'=>$this->totalSukarela->total(),
        'totalWajib'=>$this->totalWajib->total(),
        'historyCicilan'=>$this->historyCicilan->index(),
        'historyAnggota'=>$this->historyAnggota->index(),
        'historyPinjaman'=>$this->historyPinjaman->index(),
        'historySimpanan'=>$this->historySimpanan->index(),
    ];
    }
}