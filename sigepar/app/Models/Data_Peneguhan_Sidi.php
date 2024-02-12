<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Peneguhan_Sidi extends Model
{
    use HasFactory;
    protected $table = 'data_peneguhan_sidi';

    protected $fillable = ['id_user', 'nama_ayah', 'nama_ibu', 'kk', 'tgl_resmi_jemaat', 'nama_sidi', 'tgl_babtis_sidi', 'lampiran', 'tgl_lahir'];
}
