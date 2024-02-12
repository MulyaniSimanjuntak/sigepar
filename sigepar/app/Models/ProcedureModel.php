<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcedureModel extends Model
{
    use HasFactory;

    protected $table = 'procedure';
    protected $fillable = ['judul_procedure', 'id_worship', 'isi'];

      public function worship()
    {
        return $this->hasOne(WordshipModel::class, 'id', 'id_worship');
    }


}
