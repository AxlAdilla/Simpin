<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="{{route('cicilan_update',['id'=>$data['cicilan']->id])}}" method="post">
        @csrf
        @method('PUT')
        ID Pinjaman 
        <select name="id_pinjaman" >
            @foreach($data['pinjaman'] as $pinjaman)
                <option value="{{$pinjaman->id}}" 
                @if($pinjaman->id == $data['cicilan']->id_pinjaman)
                selected 
                @endif
                >{{$pinjaman->anggota->nama_anggota}}|{{$pinjaman->created_at}}|{{$pinjaman->jumlah_pinjaman}}</option>
            @endforeach 
        </select>
        <br>
        Jumlah Cicil
        <input type="number" name="jumlah_cicil" value="{{$data['cicilan']->jumlah_cicil}}">
        <br>
        <input type="submit" value="Masukan">
    </form>
    <form action="{{route('cicilan_destroy',['id'=>$data['cicilan']->id])}}" method="post">
        @method('DELETE')
        @csrf
        <input type="submit" value="Delete">
    </form>
</body>
</html>