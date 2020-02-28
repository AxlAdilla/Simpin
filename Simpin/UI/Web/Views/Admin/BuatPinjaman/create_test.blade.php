<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form action="{{route('pinjaman_store')}}" method="post">
        @csrf
        Nama Anggota 
        <select name="id_anggota" >
            @foreach($data['anggota'] as $anggota)
                <option value="{{$anggota->id}}">{{$anggota->nama_anggota}}</option>
            @endforeach 
        </select>
        <br>
        Tanggal Bayar
        <input type="date" name="tgl_bayar" value="{{date('Y-m-d')}}">
        <br>
        Jumlah Pimjaman 
        <input type="number" name="jumlah_pinjaman">
        <br>
        Jaminan 
        <input type="text" name="keterangan">
        <br>
        <input type="submit" value="Masukan">
    </form>
</body>
</html>