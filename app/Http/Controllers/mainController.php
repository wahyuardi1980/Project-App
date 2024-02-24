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
            $data = mainModel::all();
            return view('home', ['data'=>$data]);
        }
}
