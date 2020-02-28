@extends('master')

@section('active_anggota','')
@section('active_simpanan','')
@section('active_pinjaman','')
@section('active_akun','class=active')
@section('page_title','GANTI JABATAN')
@section('section')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <ol class="breadcrumb">
                <li><a href="{{route('akun_index')}}">AKUN</a></li>
                <li>{{strtoupper($data->username)}}</li>
                <li class="active">GANTI JABATAN</li>
            </ol>
        </div>
        <!-- #END# Widgets -->
        @php
            $jabatans = [['jenis'=>"admin",'isi'=>"ADMIN"],['jenis'=>"manajer",'isi'=>"MANAJER"]];
        @endphp
        <div class="row clearfix">
            <div class=" col-xs-12">
                <div class="card">
                    <div class="body">
                        <form action="{{route('akun_jabatan_update',['id'=>$data->id])}}" method="post">
                        @csrf
                        @method('PUT')
                            <small style="font-weight:600">Username</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" value="{{$data->username}}"  class="form-control" disabled>
                                </div>
                            </div>
                            <small style="font-weight:600">Jabatan</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control select2" required name="jabatan" >
                                        @foreach($jabatans as $jabatan)
                                            <option value="{{$jabatan['jenis']}}" 
                                            @if($jabatan['jenis'] == $data->jabatan)
                                            selected 
                                            @endif
                                            >{{$jabatan['isi']}}</option>
                                        @endforeach 
                                    </select>
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
