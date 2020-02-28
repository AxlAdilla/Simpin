<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    @php
        $status = [['status'=>"lunas",'isi'=>"LUNAS"],['status'=>"cicil",'isi'=>"CICIL"],['status'=>"pinjam",'isi'=>"PINJAM"]];
    @endphp
    <form action="{{route('pinjaman_update',['id'=>$data['pinjaman']->id])}}" method="post">
        @csrf
        @method('PUT')
        Nama Anggota 
        <select name="id_anggota" >
            @foreach($data['anggota'] as $anggota)
                <option value="{{$anggota->id}}" 
                @if($anggota->id == $data['pinjaman']->id_anggota)
                selected 
                @endif
                >{{$anggota->nama_anggota}}</option>
            @endforeach 
        </select>
        <br>
        Tanggal Bayar
        <input type="date" name="tgl_bayar" value="{{$data['pinjaman']->tgl_bayar}}">
        <br>
        Jumlah Pinjaman 
        <input type="number" name="jumlah_pinjaman" value="{{$data['pinjaman']->jumlah_pinjaman}}">
        <br>
        Status
        <select name="status" >
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
        <br>
        Jaminan 
        <input type="text" name="keterangan" value="{{$data['pinjaman']->jaminan['keterangan']}}">
        <br>
        <input type="submit" value="Masukan">
    </form>
    <form action="{{route('pinjaman_destroy',['id'=>$data['pinjaman']->id])}}" method="post">
        @method('DELETE')
        @csrf
        <input type="submit" value="Delete">
    </form>
</body>
</html>