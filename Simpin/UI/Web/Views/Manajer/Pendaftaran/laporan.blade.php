@extends('master_laporan')
@section('judul_tabel','LAPORAN ANGGOTA')
@section('isi_tabel')
<table >
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>Tanggal Daftar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $anggota)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$anggota->nama_anggota}}</td>
                <td>{{$anggota->alamat}}</td>
                <td>{{$anggota->created_at->toFormattedDateString()}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection