@extends('master')

@section('active_anggota','')
@section('active_simpanan','')
@section('active_pinjaman','class=active')
@section('active_akun','')
@section('page_title','BAYAR PINJAMAN')
@section('section')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <ol class="breadcrumb">
                <li><a href="{{route('pendaftaran_index')}}">PINJAMAN</a></li>
                <li><a href="{{route('pinjaman_show',['id'=>$data['id']])}}">{{strtoupper($data['pinjaman']->anggota->nama_anggota.' | '.$data['pinjaman']->created_at->toFormattedDateString())}}</a></li>
                <li class="active">BAYAR</li>
            </ol>
        </div>
        <!-- #END# Widgets -->
        <div class="row clearfix">
            <div class=" col-xs-12">
                <div class="card">
                    <div class="body">
                        <form action="{{route('pinjaman_bayar_store',['id'=>$data['id']])}}" method="post">
                            @csrf
                            <small style="font-weight:600">Jumlah Cicilan</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="jumlah_cicil" required class="form-control" placeholder="Jumlah Cicilan">
                                </div>
                            </div>
                            <div style="text-align:center" >
                                <input class="btn btn-primary" type="submit" value="BAYAR">
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
