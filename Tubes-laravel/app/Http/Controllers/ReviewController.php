<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Models\Konsumen;
use App\Models\pelanggan;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kon = Konsumen::all();
        $pel = pelanggan::all();
        $rew = review::all();
        return view('Customer Service.review', compact('rew','kon','pel'));
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
        $data['isi']=$request->isi;
        $data['date']=$request->date;
        review::create($data);
        return redirect('/Review');
        // return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data= review::find($id);
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->isi = $request->isi;
        $data->date = $request->date;
        $data->save();

        return redirect('/Review')->with('success', 'Review Has Been Updated!');
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = review::find($id);
        $data->delete();
        return redirect('/Review')->with('success', 'Review Has Been Deleted!');
    }
}
