<?php

namespace App\Http\Controllers;

use App\Models\distributor;
use Illuminate\Http\Request;
use PDF;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Distributor', [
            "distributor" => distributor::latest()->get()
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
        $data['kategori']=$request->kategor;
        distributor::create($data);
        return redirect('/Distributor');
    }

    /**
     * Display the specified resource.
     */
    public function show(distributor $distributor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(distributor $distributor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  string $id)
    {
        //
        $data= distributor::find($id);
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->telp = $request->telp;
        $data->kategori = $request->kategor;
        $data->save();

        return redirect('/Distributor')->with('success', 'Barang Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(distributor $distributor,string $id)
    {
        //
        $data = distributor::find($id);
        $data->delete();
        return redirect('/Distributor')->with('success', 'Barang Has Been Deleted!');
    }

    public function exportpdf(){
        $data = distributor::all();
        $PDF = PDF::loadView('distributorcetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-distributor.pdf');
    }
}
