@extends('master')
@section('active_anggota','class=active')
@section('active_simpanan','')
@section('active_pinjaman','')
@section('active_akun','')
@section('page_title','TAMBAH ANGGOTA')
@section('section')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <ol class="breadcrumb">
                <li><a href="{{route('pendaftaran_index')}}">ANGGOTA</a></li>
                <li><a href="{{route('pendaftaran_show',['id'=>$data->id])}}">{{strtoupper($data->nama_anggota)}}</a></li>
                <li class="active">EDIT</li>
            </ol>
        </div>
        <!-- #END# Widgets -->
        <div class="row clearfix">
            <div class=" col-xs-12">
                <div class="card">
                    <div class="body">
                        <form action="{{route('pendaftaran_update',['id'=>$data->id])}}" method="post">
                        @csrf
                            <small style="font-weight:600">Nama Anggota</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  name="nama_anggota" value="{{$data->nama_anggota}}" required class="form-control" placeholder="Nama Anggota">
                                </div>
                            </div>
                            <small style="font-weight:600">Alamat</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="alamat" class="form-control" value="{{$data->alamat}}" required placeholder="Alamat">
                                </div>
                            </div>
                            <div style="text-align:center" >
                                <input class="btn btn-primary" type="submit" value="EDIT">
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
