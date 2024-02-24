<?php

namespace App\Http\Controllers;

use App\Models\mainModel;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datadog = mainModel::all();
        return view('admin.index', ['datadog'=>$datadog]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'description' => 'required',
            'foto_barang' => 'required',
        ]);

        $datadog = [
            'nama_barang' =>$request->nama_barang,
            'kategori' =>$request->kategori,
            'harga' =>$request->harga,
            'description' =>$request->description,
            'foto_barang' =>$request->foto_barang
        ];

        mainModel::create($datadog);
        return redirect('/admin')->with('success_added', 'Data Berhasil Ditambah!');
        // return($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
