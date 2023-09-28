<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container mt-4">
    <h1>Data Barang</h1>
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nama barang</td>
                <td>Harga</td>
                <td>Stok</td>
                <td>ID Suplier</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_barang as $barang)
                <tr>
                    <td>{{ $barang->id }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->harga }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ $barang->id_suplier }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>