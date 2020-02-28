<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    @php
        $simpanans = [['jenis_simpanan'=>"simpanan_wajib",'isi'=>"Simpanan Wajib"],['jenis_simpanan'=>"simpanan_pokok",'isi'=>"Simpanan Pokok"],['jenis_simpanan'=>"simpanan_sukarela",'isi'=>"Simpanan Sukarela"]];
    @endphp
    <form action="{{route('simpanan_update',['id'=>$data['simpanan']->id])}}" method="post">
        @csrf
        @method('PUT')
        Nama Anggota 
        <select name="id_anggota" >
            @foreach($data['anggota'] as $anggota)
                <option value="{{$anggota->id}}" 
                @if($anggota->id == $data['simpanan']->id_anggota)
                selected 
                @endif
                >{{$anggota->nama_anggota}}</option>
            @endforeach 
        </select>
        <br>
        Jenis Pinjaman 
        <select name="jenis_simpanan" >
            @foreach($simpanans as $simpanan)
                <option value="{{$simpanan['jenis_simpanan']}}" 
                    @if($simpanan['jenis_simpanan'] == $data['simpanan']->jenis_simpanan)
                        selected 
                    @endif
                >
                {{$simpanan['isi']}}
                </option>
            @endforeach
        </select>
        <br>
        Jumlah Simpanan 
        <input type="number" name="jumlah_simpanan" value="{{$data['simpanan']->jumlah_simpanan}}">
        <br>
        <input type="submit" value="Masukan">
    </form>
    <form action="{{route('simpanan_destroy',['id'=>$data['simpanan']->id])}}" method="post">
        @method('DELETE')
        @csrf
        <input type="submit" value="Delete">
    </form>
</body>
</html>