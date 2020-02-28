<?php

namespace Simpin\Application\Service\Admin\Pendaftaran;

use App;

use Simpin\Domain\Repository\Pendaftaran\ShowRepository;
use Simpin\Domain\Repository\Total\AllRepository;
use Simpin\Domain\Repository\Total\PinjamanRepository;
use Simpin\Domain\Repository\Total\PokokRepository;
use Simpin\Domain\Repository\Total\SukarelaRepository;
use Simpin\Domain\Repository\Total\WajibRepository;
use Simpin\Domain\Repository\BuatCicilan\ShowByAnggotaRepository as BuatCicilanShowByAnggotaRepository;
use Simpin\Domain\Repository\BuatPinjaman\ShowByAnggotaRepository as BuatPinjamanShowByAnggotaRepository;
use Simpin\Domain\Repository\BuatSimpanan\ShowByAnggotaRepository as BuatSimpananShowByAnggotaRepository;
use Simpin\Domain\Repository\BuatAnggota\ShowByAnggotaRepository as BuatAnggotaShowByAnggotaRepository;

class ShowService
{
    private $anggota;
    private $id;
    private $totalAll;
    private $totalPinjaman;
    private $totalPokok;
    private $totalSukarela;
    private $totalWajib;
    private $historyCicilan;
    private $historyPinjaman;
    private $historySimpanan;

    public function __construct($id){
        $this->id = $id;
        $this->anggota = App::make('Simpin\Domain\Repository\Pendaftaran\ShowRepository');
        $this->totalAll = App::make('Simpin\Domain\Repository\Total\AllRepository');
        $this->totalPinjaman = App::make('Simpin\Domain\Repository\Total\PinjamanRepository');
        $this->totalPokok = App::make('Simpin\Domain\Repository\Total\PokokRepository');
        $this->totalSukarela = App::make('Simpin\Domain\Repository\Total\SukarelaRepository');
        $this->totalWajib = App::make('Simpin\Domain\Repository\Total\WajibRepository');
        $this->historyCicilan = App::make('Simpin\Domain\Repository\BuatCicilan\ShowByAnggotaRepository');
        $this->historyPinjaman = App::make('Simpin\Domain\Repository\BuatPinjaman\ShowByAnggotaRepository');
        $this->historySimpanan = App::make('Simpin\Domain\Repository\BuatSimpanan\ShowByAnggotaRepository');
    }
    
    public function execute(){
        return [
        'anggota'=>$this->anggota->show($this->id),
        'totalAll'=>$this->totalAll->anggota($this->id),
        'totalPinjaman'=>$this->totalPinjaman->anggota($this->id),
        'totalPokok'=>$this->totalPokok->anggota($this->id),
        'totalSukarela'=>$this->totalSukarela->anggota($this->id),
        'totalWajib'=>$this->totalWajib->anggota($this->id),
        'historyCicilan'=>$this->historyCicilan->show($this->id),
        'historyPinjaman'=>$this->historyPinjaman->show($this->id),
        'historySimpanan'=>$this->historySimpanan->show($this->id),
    ];
    }
}