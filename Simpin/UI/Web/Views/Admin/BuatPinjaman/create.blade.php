@extends('master')

@section('active_anggota','')
@section('active_simpanan','')
@section('active_pinjaman','class=active')
@section('active_akun','')
@section('page_title','TAMBAH PINJAMAN')
@section('section')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <ol class="breadcrumb">
                <li><a href="{{route('pinjaman_index')}}">PINJAMAN</a></li>
                <li class="active">TAMBAH</li>
            </ol>
        </div>
        <!-- #END# Widgets -->
        <div class="row clearfix">
            <div class=" col-xs-12">
                <div class="card">
                    <div class="body">
                        <form action="{{route('pinjaman_store')}}" method="post">
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
                            <small style="font-weight:600">Jatuh Tempo</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" required class="form-control " name="tgl_bayar" value="{{date('Y-m-d')}}">
                                </div>
                            </div>
                            <small style="font-weight:600">Jumlah Pinjaman</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" required class="form-control" placeholder="Jumlah Pinjaman" name="jumlah_pinjaman">
                                </div>
                            </div>
                            <small style="font-weight:600">Jaminan</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" required class="form-control" placeholder="Jaminan" name="keterangan">
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
