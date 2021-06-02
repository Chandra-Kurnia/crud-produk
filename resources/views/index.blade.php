@extends('layouts')
@section('tittle', 'Data barang')

@section('content')

<div class="container mt-5">
        <a href="/create" class="btn btn-sm btn-primary">Tambah Data Barang</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama produk</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($data as $produk)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $produk['nama_barang'] }}</td>
              <td>{{ $produk['keterangan'] }}</td>
              <td>{{ $produk['harga'] }}</td>
              <td>{{ $produk['jumlah'] }}</td>
              <td>
                  <a href="update/{{ $produk['id'] }}" class="btn btn-sm btn-warning">Update</a>
                  <a href="delete/{{ $produk['id'] }}" class="btn btn-sm btn-danger" onclick="confirm('Apakah anda yakin akan menghapus data ini ?')">Hapus</a>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
    </div>

    @endsection
