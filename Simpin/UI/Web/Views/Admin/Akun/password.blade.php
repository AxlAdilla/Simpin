@extends('master')

@section('active_anggota','')
@section('active_simpanan','')
@section('active_pinjaman','')
@section('active_akun','class=active')
@section('page_title','GANTI PASSWORD')
@section('section')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <ol class="breadcrumb">
                <li><a href="{{route('akun_index')}}">AKUN</a></li>
                <li>{{strtoupper($data->username)}}</li>
                <li class="active">GANTI PASSWORD</li>
            </ol>
        </div>
        <!-- #END# Widgets -->
        <div class="row clearfix">
            <div class=" col-xs-12">
                <div class="card">
                    <div class="body">
                        <form action="{{route('akun_password_update',['id'=>$data->id])}}" method="post">
                        @csrf
                        @method('PUT')
                            <small style="font-weight:600">Username</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" value="{{$data->username}}"  class="form-control" disabled>
                                </div>
                            </div>
                            <small style="font-weight:600">Password</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" class="form-control" required name="password" placeholder="password">
                                </div>
                            </div>
                            <small style="font-weight:600">Konfirmasi Password</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" class="form-control" required name="konfirmasi_password" placeholder="konfirmasi password">
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
