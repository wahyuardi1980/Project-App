<?php

namespace App\Http\Controllers;

use App\Models\mainModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

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

        Session::flash('nama_barang', $request->nama_barang);
        Session::flash('harga', $request->harga);
        Session::flash('description', $request->description);

        $request->validate(
            [
            'nama_barang' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'description' => 'required',
            'foto_barang' => 'required|mimes:jpeg,png,jpg|max:1024',
            ],[
                'nama_barang.required' => 'Silahkan isi nama barang!',
                'kategori.required' => 'Silahkan pilih kategori barang!',
                'harga.required' => 'Silahkan isi harga barang!',
                'description.required' => 'Silahkan isi deskripsi dari barang!',
                'foto_barang.required' => 'Silahkan pilih gambar barang!',
                'foto_barang.max' => 'Ukuran file terlalu besar!, maximal 1024kb'
            ]
        );

        // $foto_file = $request->file('foto_barang');
        // $foto_ekstensi = $foto_file->extension();
        // $foto_nama = date('ymdhis').".". $foto_ekstensi;
        // $foto_file->move(public_path('foto'), $foto_nama);

        $datadog = [
            'nama_barang' =>$request->nama_barang,
            'kategori' =>$request->kategori,
            'harga' =>$request->harga,
            'description' =>$request->description
            // 'foto_barang' => $request->foto_barang
        ];


        $foto_file = $request->file('foto_barang');
        $foto_nama = date('Y-m-d').$foto_file->getClientOriginalName();
        $path = 'uploads_image/'.$foto_nama;
        
        Storage::disk('public')->put($path, file_get_contents($foto_file));
        $datadog['foto_barang'] = $foto_nama;

        mainModel::create($datadog);
        return redirect('/admin')->with('success_added', 'Data Berhasil Ditambah!');

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
        $dp = mainModel::findOrFail($id);
        return view('admin.edit', compact(['dp']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // update data pada database
        $request->validate(
            [
            'nama_barang' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'description' => 'required',
            // 'foto_barang' => 'required|mimes:jpeg,png,jpg|max:1024',
            ],[
                'nama_barang.required' => 'Silahkan isi nama barang!',
                'kategori.required' => 'Silahkan pilih kategori barang!',
                'harga.required' => 'Silahkan isi harga barang!',
                'description.required' => 'Silahkan isi deskripsi dari barang!',
                // 'foto_barang.required' => 'Silahkan pilih gambar barang!',
                // 'foto_barang.max' => 'Ukuran file terlalu besar!, maximal 1024kb'
            ]
        );

        $datadog = [
            'nama_barang' =>$request->nama_barang,
            'kategori' =>$request->kategori,
            'harga' =>$request->harga,
            'description' =>$request->description
            // 'foto_barang' => $request->foto_barang
        ];

        $find = mainModel::find($id);
        $foto_file = $request->file('foto_barang');

        if ($foto_file) {
            $foto_nama = date('Y-m-d').$foto_file->getClientOriginalName();
            $path = 'uploads_image/'.$foto_nama;

            if ($find->foto_barang) {
                Storage::disk('public')->delete('uploads_image/' . $find->foto_barang);
            }
            
            Storage::disk('public')->put($path, file_get_contents($foto_file));
            $datadog['foto_barang'] = $foto_nama;
        }


        mainModel::where('id', $id)->update($datadog);
        return redirect('/admin')->with('success_update', 'Data Berhasil Diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dp = mainModel::findOrFail($id);

        if ($dp) {
            Storage::disk('public')->delete('uploads_image/' . $dp->foto_barang);
            $dp->delete();
        }
        return redirect('/admin')->with('sukses_dihapus', 'Data Berhasil Dihapus!');
    }
}
