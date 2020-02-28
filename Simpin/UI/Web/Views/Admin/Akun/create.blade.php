@extends('master')

@section('active_anggota','')
@section('active_simpanan','')
@section('active_pinjaman','')
@section('active_akun','class=active')
@section('page_title','TAMBAH AKUN')
@section('section')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <ol class="breadcrumb">
                <li><a href="{{route('akun_index')}}">AKUN</a></li>
                <li class="active">TAMBAH</li>
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
                        <form action="{{route('akun_store')}}" method="post">
                            @csrf
                            <small style="font-weight:600">Username</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" required class="form-control" placeholder="Username" name="username">
                                </div>
                            </div>
                            <small style="font-weight:600">Password</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" required class="form-control " placeholder="Password" name="password">
                                </div>
                            </div>
                            <small style="font-weight:600">Jabatan</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="jabatan" required class="form-control select2" >
                                        <option value="" disabled selected>-- Pilih Jabatan --</option>
                                        @foreach($jabatans as $jabatan)
                                            <option value="{{$jabatan['jenis']}}" >
                                            {{$jabatan['isi']}}
                                            </option>
                                        @endforeach 
                                    </select>
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
