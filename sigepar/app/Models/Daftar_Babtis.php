<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar_Babtis extends Model
{
    use HasFactory;
    protected $table = 'daftar_babtis';
    protected $fillable = ['user_id', 'akte_nikah', 'kk','nama_ayah','nama_ibu','nama_anak'];

    public function getKTP()
    {
        if (!$this->akte_nikah) {
            return asset('img/Logo_HKI');
        }
        return asset('fileweb/' . $this->akte_nikah);
    }
    public function getKK()
    {
        if (!$this->kk) {
            return asset('img/Logo_HKI');
        }
        return asset('fileweb/' . $this->kk);
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
