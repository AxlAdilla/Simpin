@extends('master_manajer')

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
                <li ><a href="{{route('pinjaman_index')}}">PINJAMAN</a></li>
                <li class="active">{{strtoupper($data->anggota->nama_anggota.' | '.$data->created_at->toFormattedDateString())}}</li>
            </ol>
        </div>

        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="info-box-3 bg-pink hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">account_balance_wallet</i> 
                    </div>
                    <div class="content">
                        <div class="text">PINJAMAN</div>
                        <div class="number uang-count-to" data-from="0" data-to="{{$data['jumlah_pinjaman']}}" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="info-box-3 bg-light-green hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">calendar_today</i> 
                    </div>
                    <div class="content">
                        <div class="text">TANGGAL PEMINJAMAN</div>
                        <div class="number ">{{$data->created_at->toFormattedDateString()}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="info-box-3 bg-purple hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">calendar_today</i> 
                    </div>
                    <div class="content">
                        <div class="text">TANGGAL BAYAR</div>
                        <div class="number ">{{$data->tgl_bayar->toFormattedDateString()}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="info-box-3 bg-blue-grey hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">account_balance_wallet</i> 
                    </div>
                    <div class="content">
                        <div class="text">STATUS</div>
                        <div class="number ">{{strtoupper($data->status)}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="info-box-3 bg-teal hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">account_balance_wallet</i> 
                    </div>
                    <div class="content">
                        <div class="text">SISA</div>
                        <div class="number uang-count-to" data-from="0" data-to="{{$data['jumlah_pinjaman']-$data->cicilan->sum('jumlah_cicil')}}" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- #END# Widgets -->
        <div class="row clearfix">
            <div class=" col-xs-12">
                <div class="card">
                    <div class="body" style="overflow-x:auto">
                        <table id="" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jumlah Cicil</th>
                                    <th>Tanggal Cicil</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data->cicilan->sortByDesc('created_at') as $cicilan)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        {{$cicilan->pinjaman->anggota->nama_anggota}}
                                    </td>
                                    <td>
                                        {{$cicilan->jumlah_cicil}}
                                    </td>
                                    <td>
                                        {{$cicilan->created_at->toFormattedDateString()}}
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

$('table.display').DataTable();
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
    $('.uang-count-to').countTo({
        formatter: function (value, options) {
            uang = value.toFixed(options.decimals);
            var pattern = /(-?\d+)(\d{3})/;
            while (pattern.test(uang))
                uang = uang.replace(pattern, "$1.$2");
            return 'Rp.'+uang+',00';
        },
    });
    
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