<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeuanganModel extends Model
{
    use HasFactory;
     protected $table = 'data_keuangan';
    protected $fillable = ['tanggal', 'nama', 'jumlah', 'keterangan',];
}
