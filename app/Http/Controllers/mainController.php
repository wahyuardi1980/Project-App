<?php

namespace App\Http\Controllers;

use App\Models\mainModel;
use App\Models\msgModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class mainController extends Controller
{
    //menampilkan data yg ada didalam DB cctvlab_laravel
    public function home()
        {
            $datadog = mainModel::latest()->take(3)->get();
            $categories = [
                'CCTV',
                'ALARM',
                'ACCESS_CONTROL',
                'FINGER_PRINT',
                'PABX',
                'VIDEO_WALL'
            ];

            return view('home', [
                'datadog' => $datadog,
                'categories' => $categories
            ]);
        }


    public function product(Request $request)
        {
            // Mengambil kategori unik dari database
            $categories = [
                'CCTV',
                'ALARM',
                'ACCESS_CONTROL',
                'FINGER_PRINT',
                'PABX',
                'VIDEO_WALL'
            ];

            // Mengambil data produk
            $query = mainModel::query();

            // Filter berdasarkan kategori yang dipilih
            if ($request->filled('kategori')) {
                $query->where('kategori', $request->kategori);
            }

            $datadog = $query->latest()->get();

            return view('produk.product', [
                'datadog' => $datadog,
                'categories' => $categories
            ]);
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
        
    public function pesan(Request $request) 
        {
            $request->validate(
                [
                    'nama_pengirim' =>'required',
                    'email' =>'required',
                    'pesan' =>'required',
                ],[
                    'nama_pengirim.required' => 'Wajib mengisi nama sebagai identitas!',
                    'email.required' => 'Wajib mengisi email untuk menvalidasi data anda!',
                    'pesan.required' => 'Silahkan isi pesan yang ingin anda kirim kepada kami!'
                ]
            );

            $msg = [
                'nama_pengirim' =>$request->nama_pengirim,
                'email' =>$request->email,
                'pesan' =>$request->pesan
            ];
            // return $msg;
            msgModel::create($msg);
            return redirect()->route('/')->with('success', 'Berhasil mengirim pesan!');
        }

    public function feedback() 
        {
            $msg = msgModel::latest()->get();
            return view('/admin/feedback', ['msg' => $msg]);
            // return view('admin.feedback');
        }
    public function hapusmsg(string $id)
        {
            $msg_delete = msgModel::findOrFail($id);
            $msg_delete->delete();
            return redirect('/admin/feedback')->with('success_msg', 'Message Berhasil Dihapus!');
        }
    
}
