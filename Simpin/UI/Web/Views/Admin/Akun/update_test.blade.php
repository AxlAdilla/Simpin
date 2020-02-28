<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    @php
        $jabatans = [['jenis'=>"admin",'isi'=>"Admin"],['jenis'=>"manajer",'isi'=>"manajer"]];
    @endphp
    <form action="{{route('akun_update',['id'=>$data->id])}}" method="post">
        @csrf
        @method('PUT')
        Username <input type="text" name="username" value="{{$data->username}}">
        <br>
        password <input type="text" name="password" >
        <br>
        Jabtan 
        <select name="jabatan" >
            @foreach($jabatans as $jabatan)
                <option value="{{$jabatan['jenis']}}" 
                @if($jabatan['jenis'] == $data->jabatan)
                selected 
                @endif
                >{{$jabatan['isi']}}</option>
            @endforeach 
        </select>
        <input type="submit" value="Masukan">
    </form>
    <form action="{{route('akun_destroy',['id'=>$data->id])}}" method="post">
        @method('DELETE')
        @csrf
        <input type="submit" value="Delete">
    </form>
</body>
</html>