<?php 

namespace Simpin\Application\Providers;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider{
    protected $defer = false;

    public function boot()
    {
        
    }

    public function register()
    {
        //Pendaftaran Anggota
        $this->app->bind('Simpin\Domain\Repository\Pendaftaran\ShowRepository', 'Simpin\Infrastructure\Repository\Pendaftaran\ShowEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\Pendaftaran\IndexRepository', 'Simpin\Infrastructure\Repository\Pendaftaran\IndexEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\Pendaftaran\CreateRepository', 'Simpin\Infrastructure\Repository\Pendaftaran\CreateEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\Pendaftaran\DeleteRepository', 'Simpin\Infrastructure\Repository\Pendaftaran\DeleteEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\Pendaftaran\UpdateRepository', 'Simpin\Infrastructure\Repository\Pendaftaran\UpdateEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\Pendaftaran\EditRepository', 'Simpin\Infrastructure\Repository\Pendaftaran\EditEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\Pendaftaran\StoreRepository', 'Simpin\Infrastructure\Repository\Pendaftaran\StoreEloquentRepository');

        //BuatSimpanan
        $this->app->bind('Simpin\Domain\Repository\BuatSimpanan\ShowRepository', 'Simpin\Infrastructure\Repository\BuatSimpanan\ShowEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatSimpanan\IndexRepository', 'Simpin\Infrastructure\Repository\BuatSimpanan\IndexEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatSimpanan\CreateRepository', 'Simpin\Infrastructure\Repository\BuatSimpanan\CreateEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatSimpanan\DeleteRepository', 'Simpin\Infrastructure\Repository\BuatSimpanan\DeleteEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatSimpanan\UpdateRepository', 'Simpin\Infrastructure\Repository\BuatSimpanan\UpdateEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatSimpanan\EditRepository', 'Simpin\Infrastructure\Repository\BuatSimpanan\EditEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatSimpanan\StoreRepository', 'Simpin\Infrastructure\Repository\BuatSimpanan\StoreEloquentRepository');

        //BuatPinjaman
        $this->app->bind('Simpin\Domain\Repository\BuatPinjaman\ShowRepository', 'Simpin\Infrastructure\Repository\BuatPinjaman\ShowEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatPinjaman\IndexRepository', 'Simpin\Infrastructure\Repository\BuatPinjaman\IndexEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatPinjaman\CreateRepository', 'Simpin\Infrastructure\Repository\BuatPinjaman\CreateEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatPinjaman\DeleteRepository', 'Simpin\Infrastructure\Repository\BuatPinjaman\DeleteEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatPinjaman\UpdateRepository', 'Simpin\Infrastructure\Repository\BuatPinjaman\UpdateEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatPinjaman\EditRepository', 'Simpin\Infrastructure\Repository\BuatPinjaman\EditEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatPinjaman\StoreRepository', 'Simpin\Infrastructure\Repository\BuatPinjaman\StoreEloquentRepository');

        //BuatJaminan
        $this->app->bind('Simpin\Domain\Repository\BuatJaminan\ShowRepository', 'Simpin\Infrastructure\Repository\BuatJaminan\ShowEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatJaminan\IndexRepository', 'Simpin\Infrastructure\Repository\BuatJaminan\IndexEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatJaminan\CreateRepository', 'Simpin\Infrastructure\Repository\BuatJaminan\CreateEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatJaminan\DeleteRepository', 'Simpin\Infrastructure\Repository\BuatJaminan\DeleteEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatJaminan\UpdateRepository', 'Simpin\Infrastructure\Repository\BuatJaminan\UpdateEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatJaminan\EditRepository', 'Simpin\Infrastructure\Repository\BuatJaminan\EditEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatJaminan\StoreRepository', 'Simpin\Infrastructure\Repository\BuatJaminan\StoreEloquentRepository');

        //BuatCicilan
        $this->app->bind('Simpin\Domain\Repository\BuatCicilan\ShowRepository', 'Simpin\Infrastructure\Repository\BuatCicilan\ShowEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatCicilan\IndexRepository', 'Simpin\Infrastructure\Repository\BuatCicilan\IndexEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatCicilan\CreateRepository', 'Simpin\Infrastructure\Repository\BuatCicilan\CreateEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatCicilan\DeleteRepository', 'Simpin\Infrastructure\Repository\BuatCicilan\DeleteEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatCicilan\UpdateRepository', 'Simpin\Infrastructure\Repository\BuatCicilan\UpdateEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatCicilan\EditRepository', 'Simpin\Infrastructure\Repository\BuatCicilan\EditEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatCicilan\StoreRepository', 'Simpin\Infrastructure\Repository\BuatCicilan\StoreEloquentRepository');

        //Akun
        $this->app->bind('Simpin\Domain\Repository\Akun\ShowRepository', 'Simpin\Infrastructure\Repository\Akun\ShowEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\Akun\IndexRepository', 'Simpin\Infrastructure\Repository\Akun\IndexEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\Akun\CreateRepository', 'Simpin\Infrastructure\Repository\Akun\CreateEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\Akun\DeleteRepository', 'Simpin\Infrastructure\Repository\Akun\DeleteEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\Akun\UpdateRepository', 'Simpin\Infrastructure\Repository\Akun\UpdateEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\Akun\EditRepository', 'Simpin\Infrastructure\Repository\Akun\EditEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\Akun\StoreRepository', 'Simpin\Infrastructure\Repository\Akun\StoreEloquentRepository');

        //Total
        $this->app->bind('Simpin\Domain\Repository\Total\AllRepository', 'Simpin\Infrastructure\Repository\Total\AllEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\Total\PinjamanRepository', 'Simpin\Infrastructure\Repository\Total\PinjamanEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\Total\PokokRepository', 'Simpin\Infrastructure\Repository\Total\PokokEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\Total\SukarelaRepository', 'Simpin\Infrastructure\Repository\Total\SukarelaEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\Total\WajibRepository', 'Simpin\Infrastructure\Repository\Total\WajibEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\Total\AnggotaRepository', 'Simpin\Infrastructure\Repository\Total\AnggotaEloquentRepository');

        //ShowByAnggota
        $this->app->bind('Simpin\Domain\Repository\BuatCicilan\ShowByAnggotaRepository', 'Simpin\Infrastructure\Repository\BuatCicilan\ShowByAnggotaEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatJaminan\ShowByAnggotaRepository', 'Simpin\Infrastructure\Repository\BuatJaminan\ShowByAnggotaEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatPinjaman\ShowByAnggotaRepository', 'Simpin\Infrastructure\Repository\BuatPinjaman\ShowByAnggotaEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatSimpanan\ShowByAnggotaRepository', 'Simpin\Infrastructure\Repository\BuatSimpanan\ShowByAnggotaEloquentRepository');

        //Bayar
        $this->app->bind('Simpin\Domain\Repository\BuatPinjaman\BayarRepository', 'Simpin\Infrastructure\Repository\BuatPinjaman\BayarEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\BuatPinjaman\BayarStoreRepository', 'Simpin\Infrastructure\Repository\BuatPinjaman\BayarStoreEloquentRepository');

        //Change Password & Jabatan
        $this->app->bind('Simpin\Domain\Repository\Akun\PasswordUpdateRepository', 'Simpin\Infrastructure\Repository\Akun\PasswordUpdateEloquentRepository');
        $this->app->bind('Simpin\Domain\Repository\Akun\JabatanUpdateRepository', 'Simpin\Infrastructure\Repository\Akun\JabatanUpdateEloquentRepository');
    }

    public function provides()
    {
        return [
            //Pendaftaran Anggota
            'Simpin\Domain\Repository\Pendaftaran\ShowRepository',
            'Simpin\Domain\Repository\Pendaftaran\IndexRepository',
            'Simpin\Domain\Repository\Pendaftaran\CreateRepository',
            'Simpin\Domain\Repository\Pendaftaran\DeleteRepository',
            'Simpin\Domain\Repository\Pendaftaran\UpdateRepository',
            'Simpin\Domain\Repository\Pendaftaran\EditRepository',
            'Simpin\Domain\Repository\Pendaftaran\StoreRepository',

            //BuatSimpanan
            'Simpin\Domain\Repository\BuatSimpanan\ShowRepository',
            'Simpin\Domain\Repository\BuatSimpanan\IndexRepository',
            'Simpin\Domain\Repository\BuatSimpanan\CreateRepository',
            'Simpin\Domain\Repository\BuatSimpanan\DeleteRepository',
            'Simpin\Domain\Repository\BuatSimpanan\UpdateRepository',
            'Simpin\Domain\Repository\BuatSimpanan\EditRepository',
            'Simpin\Domain\Repository\BuatSimpanan\StoreRepository',

            //BuatPinjaman
            'Simpin\Domain\Repository\BuatPinjaman\ShowRepository',
            'Simpin\Domain\Repository\BuatPinjaman\IndexRepository',
            'Simpin\Domain\Repository\BuatPinjaman\CreateRepository',
            'Simpin\Domain\Repository\BuatPinjaman\DeleteRepository',
            'Simpin\Domain\Repository\BuatPinjaman\UpdateRepository',
            'Simpin\Domain\Repository\BuatPinjaman\EditRepository',
            'Simpin\Domain\Repository\BuatPinjaman\StoreRepository',

            //BuatJaminan
            'Simpin\Domain\Repository\BuatJaminan\ShowRepository',
            'Simpin\Domain\Repository\BuatJaminan\IndexRepository',
            'Simpin\Domain\Repository\BuatJaminan\CreateRepository',
            'Simpin\Domain\Repository\BuatJaminan\DeleteRepository',
            'Simpin\Domain\Repository\BuatJaminan\UpdateRepository',
            'Simpin\Domain\Repository\BuatJaminan\EditRepository',
            'Simpin\Domain\Repository\BuatJaminan\StoreRepository',

            //BuatCicilan
            'Simpin\Domain\Repository\BuatCicilan\ShowRepository',
            'Simpin\Domain\Repository\BuatCicilan\IndexRepository',
            'Simpin\Domain\Repository\BuatCicilan\CreateRepository',
            'Simpin\Domain\Repository\BuatCicilan\DeleteRepository',
            'Simpin\Domain\Repository\BuatCicilan\UpdateRepository',
            'Simpin\Domain\Repository\BuatCicilan\EditRepository',
            'Simpin\Domain\Repository\BuatCicilan\StoreRepository',

            //Akun
            'Simpin\Domain\Repository\Akun\ShowRepository',
            'Simpin\Domain\Repository\Akun\IndexRepository',
            'Simpin\Domain\Repository\Akun\CreateRepository',
            'Simpin\Domain\Repository\Akun\DeleteRepository',
            'Simpin\Domain\Repository\Akun\UpdateRepository',
            'Simpin\Domain\Repository\Akun\EditRepository',
            'Simpin\Domain\Repository\Akun\StoreRepository',

            //Total
            'Simpin\Domain\Repository\Total\AllRepository',
            'Simpin\Domain\Repository\Total\PinjamanRepository',
            'Simpin\Domain\Repository\Total\PokokRepository',
            'Simpin\Domain\Repository\Total\SukarelaRepository',
            'Simpin\Domain\Repository\Total\WajibRepository',
            'Simpin\Domain\Repository\Total\AnggotaRepository',

            //ShowByAnggota
            'Simpin\Domain\Repository\BuatCicilan\ShowByAnggotaRepository',
            'Simpin\Domain\Repository\BuatPinjaman\ShowByAnggotaRepository',
            'Simpin\Domain\Repository\BuatSimpanan\ShowByAnggotaRepository',
            'Simpin\Domain\Repository\BuatJaminan\ShowByAnggotaRepository',

            //Bayar
            'Simpin\Domain\Repository\BuatPinjaman\BayarRepository',
            'Simpin\Domain\Repository\BuatPinjaman\BayarStoreRepository',

            //Change Password & Jabatan
            'Simpin\Domain\Repository\Akun\PasswordUpdateRepository', 'Simpin\Domain\Repository\Akun\JabatanUpdateRepository', 
        ];
    }
}