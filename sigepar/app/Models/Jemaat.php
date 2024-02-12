<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jemaat extends Model
{
    use HasFactory;
    protected $table = 'data_jemaat';
    protected $fillable = ['nama_lengkap', 'jenis_kelamin', 'keluarga', 'alamat', 'no_hp', 'tanggal_lahir', 'tanggal_bergabung', 'status', 'avatar'];
    public function getAvatar()
    {
        if (!$this->avatar) {
            return asset('img/Logo_HKI');
        }
        return asset('fileweb/' . $this->avatar);
    }
}
