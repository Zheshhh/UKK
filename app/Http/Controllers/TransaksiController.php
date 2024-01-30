<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Produk;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =  [
            'title' => 'Manajemen Transaksi',
            'transaksi' => Transaksi::paginate(3),
            'content' => '/admin/transaksi/index'
          ];
          return view('admin.layouts.wrapper',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::get();
        
        $produk_id = request('produk_id');
        $p_detail = Produk::find($produk_id);
        $data =  [
            'title' => 'Tambah Transaksi',
            'produk' => $produk,
            'p_detail' => $p_detail,
            'content' => '/admin/transaksi/create'
          ];
          return view('admin.layouts.wrapper',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
