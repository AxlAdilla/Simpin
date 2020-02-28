<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form action="{{route('simpanan_store')}}" method="post">
        @csrf
        Nama Anggota 
        <select name="id_anggota" >
            @foreach($data['anggota'] as $anggota)
                <option value="{{$anggota->id}}">{{$anggota->nama_anggota}}</option>
            @endforeach 
        </select>
        <br>
        Jenis Pinjaman 
        <select name="jenis_simpanan" >
            <option value="simpanan_wajib">
                Simpanan Wajib
            </option>
            <option value="simpanan_pokok">
                Simpanan Pokok
            </option>
            <option value="simpanan_sukarela">
                Simpanan Sukarela
            </option>
        </select>
        <br>
        Jumlah Simpanan 
        <input type="number" name="jumlah_simpanan">
        <br>
        <input type="submit" value="Masukan">
    </form>
</body>
</html>