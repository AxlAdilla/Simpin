﻿@extends('master_manajer')

@section('active_anggota','')
@section('active_simpanan','')
@section('active_pinjaman','class=active')
@section('active_akun','')
@section('page_title','PINJAMAN')
@section('section')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <ol class="breadcrumb">
                <li class="active">PINJAMAN</li>
            </ol>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12" style="margin-bottom:30px">
                <div style="display:flex;justify-content:flex-end">
                    <span id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;">
                        <i class="fa fa-calendar"></i>&nbsp;
                        <span></span> <i class="fa fa-caret-down"></i>
                    </span>
                    <input id="daterange" type="hidden" name="daterange">
                    <button class="btn btn-danger waves-effect m-r-10 m-l-10" onClick="filter('{{route('manajer.pinjaman_index_range',['range'=>'/'])}}')" style="font-weight:800">FILTER</button>
                </div>
            </div>

        </div>
        <!-- #END# Widgets -->
        <div class="row clearfix">
            <div class=" col-xs-12">
                <div class="card">
                    <div class="header">
                        <div style="display:flex;justify-content:flex-end">
                            <a class="btn bg-indigo m-l-5 m-r-5" style="font-weight:700" onclick="print()"><i class="material-icons">
                            print
                            </i> PRINT</a>
                        </div>
                    </div>
                    <div class="body "style="overflow-x:auto">
                        <table id="" class="display responsive" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jumlah Pinjaman</th>
                                    <th>Jaminan</th>
                                    <th>Status</th>
                                    <th>Tanggal Pinjaman</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $pinjaman)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        {{$pinjaman->anggota->nama_anggota}}
                                    </td>
                                    <td>
                                        {{$pinjaman->jumlah_pinjaman}}
                                    </td>
                                    <td>
                                        {{$pinjaman->jaminan['keterangan']}}
                                    </td>
                                    <td>
                                        {{strtoupper($pinjaman->status)}}
                                    </td>
                                    <td>
                                        {{$pinjaman->created_at->toFormattedDateString()}}
                                    </td>
                                    <td>
                                        {{$pinjaman->tgl_bayar->toFormattedDateString()}}
                                    </td>
                                    <td>       
                                        <div style="display:flex;justify-content:flex-end">
                                            <div class="m-l-5 m-r-5">
                                                <a class="btn btn-info" href="{{route('manajer.pinjaman_show',['id'=>$pinjaman->id])}}">
                                                    <i class="material-icons">
                                                        search
                                                    </i>
                                                    DETAIL
                                                </a>
                                            </div>
                                        </div> 
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script>
$('table.display').DataTable({
    responsive: true
});
function filter(route) {
    window.location.href = route+'/'+$('#daterange').val()
}
function print(){
    if (window.location.href[window.location.href["length"]-1] == '/') {
        window.location.href = window.location.href+'print'
    }else{
        window.location.href = window.location.href+'/print'
    }
}

$(function() {

    var start = moment("2020-01-01");
    var end = moment();


    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        $('#daterange').val(start.format('YYYY-MM-DD') + '&' + end.format('YYYY-MM-DD'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
        'Semua': [moment("2020-01-01"), moment()],
        'Hari Ini': [moment().subtract(1, 'days'), moment()],
        'Kemarin': [moment().subtract(2, 'days'), moment().subtract(1, 'days')],
        '7 Hari Terakhir': [moment().subtract(7, 'days'), moment()],
        '30 Hari Terakhir': [moment().subtract(30, 'days'), moment()],
        'Bulan Ini': [moment().startOf('month').subtract(1, 'days'), moment().endOf('month')],
        'Bulan Lalu': [moment().subtract(1, 'days').subtract(1, 'month').startOf('month'), moment().subtract(1, 'days').subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);

});
</script>
@endsection
@section('css')
<style>
div.dataTables_wrapper {
    margin-bottom: 3em;
}
div.dataTables_wrapper select{
    background-color: #fff;
}

</style>
@endsection