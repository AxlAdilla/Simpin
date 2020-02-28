@extends('master_laporan')
@section('judul_tabel','LAPORAN SIMPANAN')
@section('isi_tabel')
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Jenis Simpanan</th>
            <th>Jumlah Simpanan</th>
            <th>Tanggal Simpanan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $simpanan)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$simpanan->anggota->nama_anggota}}</td>
                <td>{{$simpanan->jenis_simpanan}}</td>
                <td>{{$simpanan->jumlah_simpanan}}</td>
                <td>{{$simpanan->created_at->toFormattedDateString()}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection