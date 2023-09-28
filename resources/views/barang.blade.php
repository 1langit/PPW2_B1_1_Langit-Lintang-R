@extends('index')

@section('header')
    <tr>
        <td>ID</td>
        <td>Nama barang</td>
        <td>Harga</td>
        <td>Stok</td>
        <td>ID Suplier</td>
    </tr>
@endsection

@section('barang')
    @foreach ($data_barang as $barang)
        <tr>
            <td>{{ $barang->id }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->harga }}</td>
            <td>{{ $barang->stok }}</td>
            <td>{{ $barang->id_suplier }}</td>
        </tr>
    @endforeach
@endsection