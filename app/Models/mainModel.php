<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mainModel extends Model
{
    use HasFactory;

    protected $table = 'main_model';
    protected $fillable = ['nama_barang', 'kategori', 'harga', 'description', 'foto_barang'];
}
