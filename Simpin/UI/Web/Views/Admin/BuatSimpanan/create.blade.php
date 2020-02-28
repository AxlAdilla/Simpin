@extends('master')

@section('active_anggota','')
@section('active_simpanan','class=active')
@section('active_pinjaman','')
@section('active_akun','')
@section('page_title','TAMBAH SIMPANAN')
@section('section')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <ol class="breadcrumb">
                <li><a href="{{route('simpanan_index')}}">SIMPANAN</a></li>
                <li class="active">TAMBAH</li>
            </ol>
        </div>
        <!-- #END# Widgets -->
        <div class="row clearfix">
            <div class=" col-xs-12">
                <div class="card">
                    <div class="body">
                        <form action="{{route('simpanan_store')}}" method="post">
                            @csrf
                            <small style="font-weight:600">Nama Anggota</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="id_anggota" required class="form-control select2" >
                                        <option value="" selected disabled>
                                            -- Pilih Anggota --
                                        </option>
                                        @foreach($data['anggota'] as $anggota)
                                            <option value="{{$anggota->id}}">{{$anggota->nama_anggota}}</option>
                                        @endforeach 
                                    </select>
                                </div>
                            </div>
                            <small style="font-weight:600">Simpanan</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="jenis_simpanan" required class="form-control select2" >
                                        <option value="" selected disabled>
                                            -- Pilih Simpanan --
                                        </option>
                                        <option value="simpanan_wajib">
                                            Simpanan Wajib
                                        </option>
                                        <option value="simpanan_pokok">
                                            Simpanan Pokok
                                        </option>
                                        <option value="simpanan_sukarela">
                                            Simpanan Sukarela
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <small style="font-weight:600">Jumlah Simpanan</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" required class="form-control" placeholder="Jumlah Simpanan" name="jumlah_simpanan">
                                </div>
                            </div>
                            <div style="text-align:center" >
                                <input class="btn btn-primary" type="submit" value="MASUKAN">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script>
</script>
@endsection
@section('css')
<style>
</style>
@endsection
