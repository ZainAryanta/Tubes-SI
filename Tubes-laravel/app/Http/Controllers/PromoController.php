<?php

namespace App\Http\Controllers;

use App\Models\promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Customer Service.promo', [
            "promo" => promo::latest()->get()
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
        $data['jumlah']=$request->jumlah;
        $data['batas']=$request->batas;
        $data['nominal']=$request->nominal;
        $data['date']=$request->date;
        $data['status']=$request->status;
        promo::create($data);
        return redirect('/Promo');
        // return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(promo $promo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(promo $promo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data= promo::find($id);
        $data->nama = $request->nama;
        $data->jumlah = $request->jumlah;
        $data->batas = $request->batas;
        $data->nominal = $request->nominal;
        $data->date = $request->date;
        $data->status= $request->status;
        $data->save();

        return redirect('/Promo')->with('success', 'Promo Has Been Updated!');
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = promo::find($id);
        $data->delete();
        return redirect('/Promo')->with('success', 'Promo Has Been Deleted!');
    }
}
