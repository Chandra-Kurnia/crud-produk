@extends('layouts')
@section('tittle', 'Tambah data barang')
@section('content')
        <div class="container mt-5">
            <h2>Tambah data barang</h2>
            <form action="/create" method="POST">
                @csrf
                <div class="input-group mb-3" style="width: 400px">
                    <input name="nama-barang" type="text" class="form-control" placeholder="Nama barang" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3" style="width: 400px">
                    <input name="keterangan" type="text" class="form-control" placeholder="Keterangan" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3" style="width: 400px">
                    <input name="harga" type="text" class="form-control" placeholder="Harga" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3" style="width: 400px">
                    <input name="jumlah" type="text" class="form-control" placeholder="Jumlah" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Tambah data</button>
            </form>
        </div>
@endsection
