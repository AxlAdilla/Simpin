@extends('master')

@section('active_anggota','')
@section('active_simpanan','class=active')
@section('active_pinjaman','')
@section('active_akun','')
@section('page_title','EDIT SIMPANAN')
@section('section')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <ol class="breadcrumb">
                <li><a href="{{route('simpanan_index')}}">SIMPANAN</a></li>
                <li>{{strtoupper($data['simpanan']->anggota->nama_anggota.' | '.$data['simpanan']->created_at->toFormattedDateString())}}</li>
                <li class="active">EDIT</li>
            </ol>
        </div>
        <!-- #END# Widgets -->
        @php
            $simpanans = [['jenis_simpanan'=>"simpanan_wajib",'isi'=>"Simpanan Wajib"],['jenis_simpanan'=>"simpanan_pokok",'isi'=>"Simpanan Pokok"],['jenis_simpanan'=>"simpanan_sukarela",'isi'=>"Simpanan Sukarela"]];
        @endphp
        <div class="row clearfix">
            <div class=" col-xs-12">
                <div class="card">
                    <div class="body">
                        <form action="{{route('simpanan_update',['id'=>$data['simpanan']->id])}}" method="post">
                        @csrf
                        @method('PUT')
                            <small style="font-weight:600">Nama Anggota</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" value="{{$data['simpanan']->anggota->nama_anggota}}"  class="form-control" disabled>
                                    <input type="hidden"  name="id_anggota" value="{{$data['simpanan']->id_anggota}}" required class="form-control" placeholder="Nama Anggota">
                                </div>
                            </div>
                            <small style="font-weight:600">Jenis Simpanan</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="jenis_simpanan" class="form-control select2" required>
                                        @foreach($simpanans as $simpanan)
                                            <option value="{{$simpanan['jenis_simpanan']}}" 
                                                @if($simpanan['isi'] == $data['simpanan']->jenis_simpanan)
                                                    selected 
                                                @endif
                                            >
                                            {{$simpanan['isi']}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <small style="font-weight:600">Jumlah Simpanan</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" required class="form-control" name="jumlah_simpanan" value="{{$data['simpanan']->jumlah_simpanan}}">
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
