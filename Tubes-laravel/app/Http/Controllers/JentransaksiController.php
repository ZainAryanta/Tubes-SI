<?php

namespace App\Http\Controllers;

use App\Models\jentransaksi;
use Illuminate\Http\Request;

class JentransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('JenTransaksi', [
            "jentransaksi" => jentransaksi::latest()->get()
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
        $data['jenis_trans']=$request->jenis;
        jentransaksi::create($data);
        return redirect('/JenisTransaksi');
        // return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(jentransaksi $jentransaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jentransaksi $jentransaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data= jentransaksi::find($id);
        $data->jenis_trans = $request->jenis;
        $data->save();

        return redirect('/JenisTransaksi')->with('success', 'Jenis Transaksi Has Been Updated!');
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = jentransaksi::find($id);
        $data->delete();
        return redirect('/JenisTransaksi')->with('success', 'Jenis Transaksi Has Been Deleted!');
    }
}
