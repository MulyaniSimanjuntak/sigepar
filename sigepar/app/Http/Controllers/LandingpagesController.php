<?php

namespace App\Http\Controllers;

use App\Models\GalleryModel;
use App\Models\Pengurus_gereja;
use App\Models\SliderModel;
use Illuminate\Http\Request;
use App\Models\AboutModel;
use App\Models\KeuanganModel;
use App\Models\PengumumanModel;
use App\Models\ProcedureModel;
use App\Models\WordshipModel;

class LandingpagesController extends Controller
{
    public function index()
    {
        $gallery = GalleryModel::all()->take(6);
        $pengurus = Pengurus_gereja::all();   
        $value = AboutModel::find(1);
        $keuangan = KeuanganModel::all();
        $jlhKeuangan = KeuanganModel::sum('jumlah');
        $worship = WordshipModel::where('is_active' , 1)->first();
        $procedure = ProcedureModel::where('id_worship', $worship->id)->get();
      
        return view('Landing.home_page', ['gallery' => $gallery, 'pengurus'=> $pengurus, 'data' =>$value, 'keuangan' => $keuangan, 'jlh_keuangan' => $jlhKeuangan, 'worship' => $worship, 'procedure' => $procedure ], );
    }
    public function v_curchdata()
    {
        $pengurus = Pengurus_gereja::all();  
        $value = AboutModel::find(1); 
        return view('Landing.curch_data',   ['pengurus'=> $pengurus,  'data' =>$value ,]);
    }
    public function v_worship()
    {
        $worship = WordshipModel::where('is_active' , 1)->first();
        $procedure = ProcedureModel::where('id_worship', $worship->id)->get();
           $value = AboutModel::find(1);
             $jlhKeuangan = KeuanganModel::sum('jumlah');
            $keuangan = KeuanganModel::all();
        return view('Landing.worship_procedure', [ 'data' =>$value ,'worship' => $worship, 'procedure' => $procedure, 'keuangan' => $keuangan,  'jlh_keuangan' => $jlhKeuangan,],  );
    }
    public function v_announcement()
    {
   $value = AboutModel::find(1);
    $gallery = GalleryModel::all()->take(6);  
        $pengumuman = PengumumanModel::all();  
        return view('Landing.announcement' ,['gallery' => $gallery,  'data' =>$value, 'pengumuman' => $pengumuman ]);
    }
    public function v_about()
    {
        $value = AboutModel::find(1);
        return view('Landing.about', ['data'=> $value]);
    }


    public function v_announcementDetail($id)
    {
         $pengumuman = PengumumanModel::find($id);
          $value = AboutModel::find(1); 
         return view('Landing.announcementDetail' ,['pengumuman' => $pengumuman, 'data' =>$value ]);

    }
}
