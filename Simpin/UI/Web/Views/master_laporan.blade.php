<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <style>
    table, td, th {
        border: 2px solid black;
    }
    td,th{
        padding:5px 10px;
    }

    table {
        width:100%;
        border-collapse: collapse;
    }
    </style>
</head>
<body>
    <div style="text-align:center;font-size:14pt">
        <p>KOPERASI SERBA USAHA</p>
        <p>BAITTULMAAL WATTAMWIL BURUH MIGRAN SEJAHTERA</p>
        <P>"(BMT BUMI SEJAHTERA)"</P>
        <p style="font-size:11pt">Alamat Kantor : Jalan Jenderal Soedirman Desa Danasri Kec. Nusawungu Kab. Cilacap</p>
    </div>
    <hr style="border:solid 2px black">
    <div style="text-align:center;font-size:12pt;font-weight:600;margin-bottom:5px">@yield('judul_tabel')</div>
    @yield('isi_tabel')
</body>
</html>