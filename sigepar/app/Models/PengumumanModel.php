<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengumumanModel extends Model
{
    use HasFactory;
    protected $table = 'pengumuman';
    protected $fillable = ['tanggal', 'judul_pengumuman', 'isi'];
}
