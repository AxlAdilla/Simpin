@extends('master')

@section('active_anggota','')
@section('active_simpanan','')
@section('active_pinjaman','class=active')
@section('active_akun','')
@section('page_title','EDIT PINJAMAN')
@section('section')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <ol class="breadcrumb">
                <li><a href="{{route('pinjaman_index')}}">PINJAMAN</a></li>
                <li>{{strtoupper($data['pinjaman']->anggota->nama_anggota.' | '.$data['pinjaman']->created_at->toFormattedDateString())}}</li>
                <li class="active">EDIT</li>
            </ol>
        </div>
        <!-- #END# Widgets -->
        @php
            $status = [['status'=>"lunas",'isi'=>"LUNAS"],['status'=>"cicil",'isi'=>"CICIL"],['status'=>"pinjam",'isi'=>"PINJAM"]];
        @endphp
        <div class="row clearfix">
            <div class=" col-xs-12">
                <div class="card">
                    <div class="body">
                        <form action="{{route('pinjaman_update',['id'=>$data['pinjaman']->id])}}" method="post">
                        @csrf
                        @method('PUT')
                            <small style="font-weight:600">Nama Anggota</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" value="{{$data['pinjaman']->anggota->nama_anggota}}"  class="form-control" disabled>
                                    <input type="hidden"  name="id_anggota" value="{{$data['pinjaman']->id_anggota}}" required class="form-control" placeholder="Nama Anggota">
                                </div>
                            </div>
                            <small style="font-weight:600">Tanggal Bayar</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" class="form-control" required name="tgl_bayar" value="{{$data['pinjaman']->tgl_bayar->format('Y-m-d')}}">
                                </div>
                            </div>
                            <small style="font-weight:600">Jumlah Pinjaman</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" required class="form-control" placeholder="Jumlah Pinjaman" name="jumlah_pinjaman" value="{{$data['pinjaman']->jumlah_pinjaman}}">
                                </div>
                            </div>
                            <small style="font-weight:600">Status</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="status" required class="form-control select2">
                                        @foreach($status as $status_bayar)
                                            <option value="{{$status_bayar['status']}}" 
                                                @if($status_bayar['status'] == $data['pinjaman']->status)
                                                    selected 
                                                @endif
                                            >
                                            {{$status_bayar['isi']}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <small style="font-weight:600">Jaminan</small>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="keterangan" class="form-control" required value="{{$data['pinjaman']->jaminan['keterangan']}}">
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
