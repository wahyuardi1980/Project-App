<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mainModel extends Model
{
    use HasFactory;

    protected $fillable = ['foto_produk', 'description'];
    protected $table = 'main_model';
}
