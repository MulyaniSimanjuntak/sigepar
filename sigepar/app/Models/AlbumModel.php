<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlbumModel extends Model
{
    use HasFactory;

     protected $table = 'album_gallery';
     protected $fillable = ['nama_album', 'gallery_album'];

     
    public function gallery()
    {
        // return $this->hasOne(GalleryModel::class, 'id', 'id_album');
        // return $this->
    }

    

        public function getAvatar()
    {
        if (!$this->avatar) {
            return asset('img/Logo_HKI');
        }
        return asset('fileweb/' . $this->avatar);
    }
}
