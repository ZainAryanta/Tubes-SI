<?php

namespace App\Http\Controllers;

use App\Models\jentransaksi;
use App\Models\Konsumen;
use App\Models\pelanggan;
use App\Models\transaksi;
use Illuminate\Http\Request;
use PDF;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kon = Konsumen::all();
        $pel = pelanggan::all();
        $jen = jentransaksi::all();
        $tran = transaksi::all();
        return view('transaksi', compact('tran','kon','pel','jen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama' => 'required',
            'total' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
            'jenis' => 'required',
        ]);

        $data['nama']=$request->nama;
        $data['total']=$request->total;
        $data['jumlah']=$request->jumlah;
        $data['tanggal']=$request->tanggal;
        $data['jenis']=$request->jenis;
        transaksi::create($data);
        return redirect('/Transaksi');
        // return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(transaksi $transaksi)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data= transaksi::find($id);
        $data->nama = $request->nama;
        $data->total = $request->total;
        $data->jumlah = $request->jumlah;
        $data->tanggal = $request->tanggal;
        $data->jenis = $request->jenis;
        $data->save();

        return redirect('/Transaksi')->with('success', 'Transaksi Has Been Updated!');
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = transaksi::find($id);
        $data->delete();
        return redirect('/Transaksi')->with('success', 'Transaksi Has Been Deleted!');
    }

    public function exportpdf(){
        $data = transaksi::all();
        $PDF = PDF::loadView('transaksicetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-transaksi.pdf');
    }
}
