﻿@extends('master')
@section('active_anggota','class=active')
@section('active_simpanan','')
@section('active_pinjaman','')
@section('active_akun','')
@section('page_title','ANGGOTA')
@section('section')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <ol class="breadcrumb">
                <li><a href="{{route('pendaftaran_index')}}">ANGGOTA</a></li>
                <li class="active">{{strtoupper($data['anggota']->nama_anggota)}}</li>
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
                    <button class="btn btn-danger waves-effect m-r-10 m-l-10" onClick="filter('{{route('pendaftaran_show_range',['range'=>'/','id'=>$data['anggota']->id])}}')" style="font-weight:800">FILTER</button>
                </div>
            </div>

        </div>
        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="info-box-3 bg-pink hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">account_balance_wallet</i> 
                    </div>
                    <div class="content">
                        <div class="text">SIMPANAN POKOK</div>
                        <div class="number uang-count-to" data-from="0" data-to="{{$data['totalPokok']}}" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="info-box-3 bg-cyan hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">account_balance_wallet</i>
                    </div>
                    <div class="content">
                        <div class="text">SIMPANAN SUKARELA</div>
                        <div class="number uang-count-to" data-from="0" data-to="{{$data['totalSukarela']}}" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="info-box-3 bg-light-green hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">account_balance_wallet</i>
                    </div>
                    <div class="content">
                        <div class="text">SIMPANAN WAJIB</div>
                        <div class="number uang-count-to" data-from="0" data-to="{{$data['totalWajib']}}" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="info-box-4 bg-orange hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">account_balance_wallet</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL SIMPANAN</div>
                        <div class="number uang-count-to" data-from="0" data-to="{{$data['totalAll']}}" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="info-box-3 bg-brown hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">credit_card</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL PINJAMAN</div>
                        <div class="number uang-count-to" data-from="0" data-to="{{$data['totalPinjaman']}}" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->
        <div class="row clearfix">
            <div class=" col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            History {{ucfirst($data['anggota']->nama_anggota)}} <small>Rangkuman History</small>
                        </h2>
                    </div>
                    <div class="body" style="overflow-x:auto">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                            <li role="presentation" class="active"><a href="#simpanan" data-toggle="tab" aria-expanded="false">SIMPANAN</a></li>
                            <li role="presentation" class=""><a href="#pinjaman" data-toggle="tab" aria-expanded="false">PINJAMAN</a></li>
                            <li role="presentation" class=""><a href="#cicilan" data-toggle="tab" aria-expanded="false">PEMBAYARAN</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="simpanan">
                                <table id="" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data['historySimpanan'] as $simpanan)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                <div>
                                                    <a style="color:black" href="{{route('simpanan_edit',['id'=>$simpanan->id])}}">{{$simpanan->anggota->nama_anggota}} menyimpan {{$simpanan->jenis_simpanan}} sebanyak {{$simpanan->jumlah_simpanan}}</a>
                                                </div>
                                                <div style="text-align:right">
                                                    <small >
                                                        {{$simpanan->created_at->diffForHumans()}}
                                                    </small>
                                                </div>
                                            </td>
                                            <td>
                                                <div style="display:flex;justify-content:flex-end">
                                                    <form style="display:inline-block" method="post" onsubmit="delete_row(event)" action="{{route('simpanan_destroy',['id'=>$simpanan->id])}}">
                                                        <button class="btn btn-danger m-l-5 m-r-5" >
                                                            <i class="material-icons">
                                                            delete
                                                            </i>
                                                            DELETE
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="pinjaman">
                                <table id="" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data['historyPinjaman'] as $pinjaman)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                <div>
                                                    <a style="color:black" href="{{route('pinjaman_show',['id'=>$pinjaman->id])}}">{{$pinjaman->anggota->nama_anggota}} meminjam sebanyak {{$pinjaman->jumlah_pinjaman}} dengan jaminan {{$pinjaman['jaminan']['keterangan']}}</a>
                                                </div>
                                                <div style="text-align:right">
                                                    <small >
                                                        {{$pinjaman->created_at->diffForHumans()}}
                                                    </small>
                                                </div>
                                            </td>
                                            <td>
                                                <div style="display:flex;justify-content:flex-end">
                                                    <div class="m-l-5 m-r-5">
                                                        <a class="btn btn-success m-l-5 m-r-5" href="{{route('pinjaman_bayar',['id'=>$pinjaman->id])}}">
                                                            <i class="material-icons">
                                                            account_balance_wallet
                                                        </i>
                                                        BAYAR
                                                        </a>
                                                    </div>
                                                    <div class="m-l-5 m-r-5">
                                                        <a class="btn btn-warning m-l-5 m-r-5" href="{{route('pinjaman_edit',['id'=>$pinjaman->id])}}">
                                                            <i class="material-icons">
                                                                edit
                                                            </i>
                                                            EDIT
                                                        </a>
                                                    </div>
                                                    <form class="m-l-5 m-r-5" style="display:inline-block" method="post" onsubmit="delete_row(event)" action="{{route('pinjaman_destroy',['id'=>$pinjaman->id])}}">
                                                        <button class="btn btn-danger m-l-5 m-r-5" >
                                                            <i class="material-icons">
                                                            delete
                                                            </i>
                                                            DELETE
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="cicilan">
                                <table id="" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data['historyCicilan'] as $cicilan)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                <div>
                                                    <a style="color:black" href="{{route('cicilan_edit',['id'=>$cicilan->id])}}">{{$cicilan->pinjaman->anggota->nama_anggota}} membayar sebanyak {{$cicilan->jumlah_cicil}} pada Pinjaman {{strtoupper($cicilan->pinjaman->anggota->nama_anggota.' | '.$cicilan->pinjaman->created_at->toFormattedDateString())}}</a>
                                                </div>
                                                <div style="text-align:right">
                                                    <small >
                                                        {{$cicilan->created_at->diffForHumans()}}
                                                    </small>
                                                </div>
                                            </td>
                                            <td>
                                                <div style="display:flex;justify-content:flex-end">
                                                    <form style="display:inline-block" method="post" onsubmit="delete_row(event)" action="{{route('cicilan_destroy',['id'=>$cicilan->id])}}">
                                                        <button class="btn btn-danger m-l-5 m-r-5" >
                                                            <i class="material-icons">
                                                            delete
                                                            </i>
                                                            DELETE
                                                        </button>
                                                    </form>
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
        </div>
    </div>
</section>
@endsection
@section('js')
<script>
$('table.display').DataTable();
function filter(route) {
    window.location.href = route+'/'+$('#daterange').val()
}
function delete_row(e) {
    e.preventDefault()
    var url =e.currentTarget.action

    Swal.fire({
        title: 'Anda Yakin Menghapus Data?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!'
    }).then((result) => {
        if (result.value) {
            var form_data = {
                '_token':"{{csrf_token()}}",
                "_method":"DELETE"
            }
            fetch(url, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(form_data),
                })
                .then((response) => {
                window.location.reload()
                })
                .catch((error) => {
                });

        }
        })
}
$(function() {

    $('.uang-count-to').countTo({
        formatter: function (value, options) {
            uang = value.toFixed(options.decimals);
            var pattern = /(-?\d+)(\d{3})/;
            while (pattern.test(uang))
                uang = uang.replace(pattern, "$1.$2");
            return 'Rp.'+uang+',00';
        },
    });

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