<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>
        </tr>
        @foreach($detail_penjualan as $detail)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$detail->id_barang}}</td>
            <td><a href="">Hapus</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>