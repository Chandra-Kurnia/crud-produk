<?php

namespace App\Http\Controllers;

use App\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produk = produk::get();
        return view('index', ['data' => $produk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rp = "Rp. ";
        $this->validate($request, [
            'nama-barang' => ['required'],
            'keterangan' => ['required'],
            'harga' => ['required'],
            'jumlah' => ['required']
         ]);
         $harga = $rp.$request['harga'];

         //input to db
         DB::table('produk')->insert([
            'nama_barang' => $request['nama-barang'],
            'keterangan' => $request['keterangan'],
            'harga' => $harga,
            'jumlah' => $request['jumlah']
        ]);

        $produk = produk::get();
        return view('index', ['data' => $produk]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $produk = DB::table('produk')->where('id', $id)->get();
        return view('update', ['produk' => $produk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'nama-barang' => ['required'],
            'keterangan' => ['required'],
            'harga' => ['required'],
            'jumlah' => ['required']
         ]);

         DB::table('produk')->where('id', $id)->update([
            'nama_barang' => $request['nama-barang'],
            'keterangan' => $request['keterangan'],
            'harga' => $request['harga'],
            'jumlah' => $request['jumlah']
        ]);

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('produk')->where('id', $id)->delete();

        return redirect()->route('index');
    }
}
