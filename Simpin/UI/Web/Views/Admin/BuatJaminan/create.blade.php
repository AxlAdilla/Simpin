<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form action="{{route('jaminan_store')}}" method="post">
        @csrf
        ID Pinjaman 
        <select name="id_pinjaman" >
            @foreach($data['pinjaman'] as $pinjaman)
                <option value="{{$pinjaman->id}}">{{$pinjaman->anggota->nama_anggota}}|{{$pinjaman->created_at}}|{{$pinjaman->jumlah_pinjaman}}</option>
            @endforeach 
        </select>
        <br>
        Keterangan Jaminan
        <input type="text" name="keterangan">
        <br>
        <input type="submit" value="Masukan">
    </form>
</body>
</html>