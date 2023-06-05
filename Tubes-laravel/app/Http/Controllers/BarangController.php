<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;
use PDF;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Barang', [
            "barang" => barang::latest()->get()
        ]);
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
        $data['nama']=$request->nama;
        $data['jenis']=$request->jenis;
        $data['harga']=$request->harga;
        $data['jumlah']=$request->jumlah;
        barang::create($data);
        return redirect('/Barang');
        // return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data= barang::find($id);
        $data->nama = $request->nama;
        $data->jenis = $request->jenis;
        $data->harga = $request->harga;
        $data->jumlah = $request->jumlah;
        $data->save();

        return redirect('/Barang')->with('success', 'Barang Has Been Updated!');
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = barang::find($id);
        $data->delete();
        return redirect('/Barang')->with('success', 'Barang Has Been Deleted!');
    }

    public function exportpdf(){
        $data = barang::all();
        $PDF = PDF::loadView('barangcetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-barang.pdf');
    }
}
