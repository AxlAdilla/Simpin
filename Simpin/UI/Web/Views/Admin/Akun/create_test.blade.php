<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    @php
        $jabatans = [['jenis'=>"admin",'isi'=>"Admin"],['jenis'=>"manajer",'isi'=>"manajer"]];
    @endphp
    <form action="{{route('akun_store')}}" method="post">
        @csrf
        Username <input type="text" name="username">
        <br>
        password <input type="text" name="password">
        <br>
        Jabtan 
        <select name="jabatan" >
            @foreach($jabatans as $jabatan)
                <option value="{{$jabatan['jenis']}}" >
                {{$jabatan['isi']}}
                </option>
            @endforeach 
        </select>
        <input type="submit" value="Masukan">
    </form>
</body>
</html>