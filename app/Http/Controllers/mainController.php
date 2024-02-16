<?php

namespace App\Http\Controllers;

use App\Models\mainModel;
use Illuminate\Http\Request;

class mainController extends Controller
{
    //menampilkan data yg ada didalam DB cctvlab_laravel
    public function index()
        {
            $data = mainModel::all();
            return view('home', ['data'=>$data]); 
        }
}
