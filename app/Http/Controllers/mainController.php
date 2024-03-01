<?php

namespace App\Http\Controllers;

use App\Models\mainModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class mainController extends Controller
{
    //menampilkan data yg ada didalam DB cctvlab_laravel
    public function home()
        {
            $datadog = mainModel::latest()->take(3)->get();
            return view('home', ['datadog'=>$datadog]);
        }

    public function product()
        {
            $datadog = mainModel::all();
            return view('produk.product', ['datadog'=>$datadog]);
        }

    public function show(string $id)
        {
            $datadog = mainModel::findOrFail($id);
            return view('produk.show', compact('datadog'));
        }

    public function search(Request $request)
        {
            $keyword = $request->input('cari');
            $datadog = mainModel::where('nama_barang', 'like', "%".$keyword."%")->paginate();

            return view('produk.product', compact('datadog'));
        }
    
}
