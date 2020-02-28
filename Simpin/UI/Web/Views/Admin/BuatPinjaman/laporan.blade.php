@extends('master_laporan')
@section('judul_tabel','LAPORAN PINJAMAN')
@section('isi_tabel')
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Jumlah Pinjaman</th>
            <th>Jaminan</th>
            <th>Status</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Bayar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $pinjaman)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$pinjaman->anggota->nama_anggota}}</td>
                <td>{{$pinjaman->jumlah_pinjaman}}</td>
                <td>{{$pinjaman->jaminan['keterangan']}}</td>
                <td>{{$pinjaman->status}}</td>
                <td>{{$pinjaman->created_at->toFormattedDateString()}}</td>
                <td>{{$pinjaman->tgl_bayar->toFormattedDateString()}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection