<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use Illuminate\Http\Request;
use PDF;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('konsumen', [
            "konsumen" => Konsumen::latest()->get()
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
        Konsumen::create($data);
        return redirect('/konsumen');
        // return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(Konsumen $konsumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Konsumen $konsumen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data= Konsumen::find($id);
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->telp = $request->telp;
        $data->save();

        return redirect('/konsumen')->with('success', 'Konsumen Has Been Updated!');
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Konsumen::find($id);
        $data->delete();
        return redirect('/konsumen')->with('success', 'Konsumen Has Been Deleted!');
    }

    public function exportpdf(){
        $data = Konsumen::all();
        $PDF = PDF::loadView('konsumencetak', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-konsumen.pdf');
    }
}
