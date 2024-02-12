<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPernikahanModel extends Model
{
    use HasFactory;
    protected $table = 'data_pernikahan';

    protected $fillable = ['id_user', 'nama_pria', 'tgl_lahir_pria', 'tgl_babtis_pria', 'tgl_sidi_pria', 'lampiran_pria', 'sidi_pria', 'izin_ortu_pria', 'surat_jemaat_pria', 'ijazah_pria', 'nama_wanita', 'tgl_lahir_wanita', 'tgl_babtis_wanita', 'tgl_sidi_wanita', 'lampiran_wanita', 'sidi_wanita', 'izin_ortu_wanita', 'surat_jemaat_wanita', 'ijazah_wanita'];



      public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }
}
