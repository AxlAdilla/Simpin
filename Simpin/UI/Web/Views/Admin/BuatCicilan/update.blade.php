@extends('master')
@section('title','Dashboard')
@section('username','Zackaryhamill')
@section('jabatan','Admin')
@section('active_anggota','')
@section('active_simpanan','')
@section('active_pinjaman','class=active')
@section('active_akun','')
@section('page_title','EDIT CICILAN')
@section('section')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <ol class="breadcrumb">
                <li><a href="{{route('pinjaman_index')}}">PINJAMAN</a></li>
                <li><a href="{{route('pinjaman_show',['id'=>$data['cicilan']->pinjaman->id])}}">{{strtoupper($data['cicilan']->pinjaman->anggota->nama_anggota.' | '.$data['cicilan']->pinjaman->created_at->toFormattedDateString())}}</a></li>
                <li class="active">CICILAN | EDIT</li>
            </ol>
        </div>
        <!-- #END# Widgets -->
        <div class="row clearfix">
            <div class=" col-xs-12">
                <div class="card">
                    <div class="body">
                        <form action="{{route('cicilan_update',['id'=>$data['cicilan']->id])}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <div class="form-line">
                                    {{--
                                        <select name="id_pinjaman" class="form-control select2" >
                                            @foreach($data['pinjaman'] as $pinjaman)
                                            <option value="{{$pinjaman->id}}" 
                                                @if($pinjaman->id == $data['cicilan']->id_pinjaman)
                                                selected 
                                                @endif
                                                >{{$pinjaman->anggota->nama_anggota}}|{{$pinjaman->created_at}}|{{$pinjaman->jumlah_pinjaman}}</option>
                                                @endforeach 
                                            </select>
                                    --}}
                                    <input type="text" value="{{$data['cicilan']->pinjaman->anggota->nama_anggota}} | {{$data['cicilan']->pinjaman->created_at->toFormattedDateString()}} | Rp.{{$data['cicilan']->pinjaman->jumlah_pinjaman}}" class="form-control" disabled>
                                </div>
                                <input type="hidden" name="id_pinjaman" value="{{$data['cicilan']->id_pinjaman}}" >
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="jumlah_cicil" value="{{$data['cicilan']->jumlah_cicil}}" required class="form-control" placeholder="Jumlah Cicilan">
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
