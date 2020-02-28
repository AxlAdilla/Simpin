<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="{{route('jaminan_update',['id'=>$data['jaminan']->id])}}" method="post">
        @csrf
        @method('PUT')
        ID Pinjaman 
        <select name="id_pinjaman" >
            @foreach($data['pinjaman'] as $pinjaman)
                <option value="{{$pinjaman->id}}" 
                @if($pinjaman->id == $data['jaminan']->id_pinjaman)
                selected 
                @endif
                >{{$pinjaman->anggota->nama_anggota}}|{{$pinjaman->created_at}}|{{$pinjaman->jumlah_pinjaman}}</option>
            @endforeach 
        </select>
        <br>
        Keterangan Jaminan
        <input type="text" name="keterangan" value="{{$data['jaminan']->keterangan}}">
        <br>
        <input type="submit" value="Masukan">
    </form>
    <form action="{{route('jaminan_destroy',['id'=>$data['jaminan']->id])}}" method="post">
        @method('DELETE')
        @csrf
        <input type="submit" value="Delete">
    </form>
</body>
</html>