<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;
use PDF;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Customer Service.pelanggan', [
            "pelanggan" => pelanggan::latest()->get()
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
        $data['email']=$request->email;
        $data['telp']=$request->telp;
        $data['jumlah']=$request->jumlah;
        pelanggan::create($data);
        return redirect('/Pelanggan');
        // return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pelanggan $pelanggan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data= pelanggan::find($id);
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->telp = $request->telp;
        $data->jumlah = $request->jumlah;
        $data->save();

        return redirect('/Pelanggan')->with('success', 'Pelanggan Has Been Updated!');
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = pelanggan::find($id);
        $data->delete();
        return redirect('/Pelanggan')->with('success', 'Pelanggan Has Been Deleted!');
    }

    public function exportpdf(){
        $data = pelanggan::all();
        $PDF = PDF::loadView('/Customer Service/pelanggancetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-pelanggan.pdf');
    }
}
