<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use App\Models\riwayatkonsumen;
use Illuminate\Http\Request;

class RiwayatkonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Konsumen::all();
        $riwayat = riwayatkonsumen::all();
        return view('riwayatkonsumen', compact('riwayat','data'));
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
    }

    /**
     * Display the specified resource.
     */
    public function show(riwayatkonsumen $riwayatkonsumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(riwayatkonsumen $riwayatkonsumen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, riwayatkonsumen $riwayatkonsumen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(riwayatkonsumen $riwayatkonsumen)
    {
        //
    }
}
