<?php

namespace App\Http\Controllers;

use App\Models\riwayattran;
use App\Models\transaksi;
use Illuminate\Http\Request;

class RiwayattranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tran = transaksi::all();
        $rwyt = riwayattran::all();
        return view('riwayattran', compact('rwyt','tran'));
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
    public function show(riwayattran $riwayattran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(riwayattran $riwayattran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, riwayattran $riwayattran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(riwayattran $riwayattran)
    {
        //
    }
}
