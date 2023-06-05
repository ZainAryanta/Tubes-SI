<?php

namespace App\Http\Controllers;
use App\Models\pelanggan;
use App\Models\tukarpromo;
use App\Models\promo;
use Illuminate\Http\Request;

class TukarpromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pel = pelanggan::all();
        $data = promo::all();
        $tukar = tukarpromo::all();
        return view('Customer Service.tukarpromo', compact('tukar','data','pel'));
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
        $tukarpromo=tukarpromo::create([
            'nama_mem'=>$request->mem,
            'nama_prom'=>$request->prom,
            'date'=>$request->date,
           'status'=>$request->status,
            // tukarpromo::create($data);
        ]);
        return redirect('/TukarPromo');
        // return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(tukarpromo $tukarpromo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tukarpromo $tukarpromo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data= tukarpromo::find($id);
        $data->nama_mem = $request->mem;
        $data->nama_prom = $request->prom;
        $data->date = $request->date;
        $data->status = $request->status;
        $data->save();

        return redirect('/TukarPromo')->with('success', 'TUKAR Has Been Updated!');
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = tukarpromo::find($id);
        $data->delete();
        return redirect('/TukarPromo')->with('success', 'TUKAR Has Been Deleted!');
    }
}
