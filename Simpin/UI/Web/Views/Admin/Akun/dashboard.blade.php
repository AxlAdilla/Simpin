@extends('master')

@section('active_anggota','')
@section('active_simpanan','')
@section('active_pinjaman','')
@section('active_akun','class=active')
@section('page_title','AKUN')
@section('section')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <ol class="breadcrumb">
                <li class="active">AKUN</li>
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
                    <button class="btn btn-danger waves-effect m-r-10 m-l-10" onClick="filter('{{route('akun_index_range',['range'=>'/'])}}')" style="font-weight:800">FILTER</button>
                </div>
            </div>

        </div>
        <!-- #END# Widgets -->
        <div class="row clearfix">
            <div class=" col-xs-12">
                <div class="card">
                    <div class="header">
                        <div style="display:flex;justify-content:flex-end">
                            <a class="btn btn-success m-l-5 m-r-5" style="font-weight:700" href="{{route('akun_create')}}"><i class="material-icons">
                            add
                            </i> AKUN</a>
                        </div>
                    </div>
                    <div class="body "style="overflow-x:auto">
                        <table id="" class="display responsive" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Jabatan</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $akun)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        {{$akun->username}}
                                    </td>
                                    <td>
                                        {{strtoupper($akun->jabatan)}}
                                    </td>
                                    <td>
                                        {{$akun->created_at->toFormattedDateString()}}
                                    </td>
                                    <td>       
                                        <div style="display:flex;justify-content:flex-end">
                                            <div class="m-l-5 m-r-5">
                                                <a class="btn btn-info" href="{{route('akun_password',['id'=>$akun->id])}}">
                                                    <i class="material-icons">
                                                        vpn_key
                                                    </i>
                                                    GANTI PASSWORD
                                                </a>
                                            </div>
                                            <div class="m-l-5 m-r-5">
                                                <a class="btn btn-warning" href="{{route('akun_jabatan',['id'=>$akun->id])}}">
                                                    <i class="material-icons">
                                                        edit
                                                    </i>
                                                    EDIT JABATAN
                                                </a>
                                            </div>
                                            <form  class="m-l-5 m-r-5" style="display:inline-block" method="post" onsubmit="delete_row(event)" action="{{route('akun_destroy',['id'=>$akun->id])}}">
                                                <button class="btn btn-danger" type="submit">
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
function delete_row(e) {
    e.preventDefault()
    var url =e.currentTarget.action

    Swal.fire({
        title: 'Anda Yakin Menghapus Akun?',
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