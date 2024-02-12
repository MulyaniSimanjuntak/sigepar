<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WordshipModel extends Model
{
    use HasFactory;
    protected $table = 'worship';
    protected $fillable = ['judul', 'hari', 'tanggal', 'tema'];

     public function procedure()
    {
        return $this->belongsTo(ProcedureModel::class);
    }
}
