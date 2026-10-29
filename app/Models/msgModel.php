<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class msgModel extends Model
{
    use HasFactory;

    protected $table = 'msg';
    protected $fillable = ['nama_pengirim', 'email', 'pesan'];
}
