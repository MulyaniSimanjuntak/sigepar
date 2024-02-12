<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus_gereja extends Model
{
    use HasFactory;
    protected $table = 'pengurus_gereja';
    protected $fillable = ['nama_pengurus', 'jenis_kelamin', 'kontak', 'tanggal_masuk', 'tanggal_penabalan', 'jabatan', 'quotes', 'avatar', 'user_id'];

    public function getAvatar()
    {
        if (!$this->avatar) {
            return asset('img/Logo_HKI');
        }
        return asset('fileweb/' . $this->avatar);
    }
}
