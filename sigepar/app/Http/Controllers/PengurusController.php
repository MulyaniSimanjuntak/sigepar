<?php

namespace App\Http\Controllers;

use App\Models\GalleryModel;
use App\Models\Jemaat;
use App\Models\PengumumanModel;
use App\Models\WordshipModel;

class PengurusController extends Controller
{
    public function index(){
        $data = [
            'jumlah_jemaat' => Jemaat::count(),
            'jumlah_pengumuman' => PengumumanModel::count(),
            'jlh_gallery' => GalleryModel::count(),
            'jlh_worship' => WordshipModel::count(),
        ];

        return view('Pengurus.Dashboard', ['data' => $data]);
    }
}
