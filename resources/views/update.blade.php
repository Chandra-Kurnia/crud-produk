@extends('layouts')
@section('tittle', 'Update data barang')
@section('content')
        <div class="container mt-5">
            <h2>Ubah data barang</h2>
            @foreach ($produk as $data)
                <form action="/update/{{ $data->id }}" method="POST">
                    @csrf
                    <div class="input-group mb-3" style="width: 400px">
                        <input value="{{ $data->nama_barang }}" name="nama-barang" type="text" class="form-control" placeholder="Nama barang" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3" style="width: 400px">
                        <input value="{{ $data->keterangan}}" name="keterangan" type="text" class="form-control" placeholder="Keterangan" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3" style="width: 400px">
                        <input value="{{ $data->harga }}" name="harga" type="text" class="form-control" placeholder="Harga" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3" style="width: 400px">
                        <input value="{{ $data->jumlah }}" name="jumlah" type="text" class="form-control" placeholder="Jumlah" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary">Ubah data</button>
                </form>
            @endforeach
        </div>
@endsection
