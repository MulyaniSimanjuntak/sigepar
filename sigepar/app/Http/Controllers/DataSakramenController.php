<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSakramenController extends Controller
{
    // Sakramen baptis
    public function index()
    {
        $value = \App\Models\Daftar_Babtis::all();
        return view('Admin.data_sacrament.sacrament_baptis.sacrament_baptis', ['data' => $value]);
    }
    public function detailbaptis($id)
    {   

        return view('Admin.data_sacrament.sacrament_baptis.detail');
    }
    // Peneguhan Sidi
    public function peneguhan_sidi()
    {
        $value = \App\Models\Data_Peneguhan_Sidi::all();
        return view('Admin.data_sacrament.peneguhan_sidi.peneguhan_sidi',['data' => $value]);
    }
    public function peneguhan_sidiDetail($id)
    {
        $value = \App\Models\Data_Peneguhan_Sidi::find($id);
        return view('Admin.data_sacrament.peneguhan_sidi.detail',['data' => $value]);
    }
    // Pernikahan
    public function pernikahan()
    {
        $value = \App\Models\DataPernikahanModel::all();
        return view('Admin.data_sacrament.pernikahan.pernikahan',['data' => $value]);
    }
    public function detailpernikahan()
    {
        return view('Admin.data_sacrament.pernikahan.detail');
    }

    public function pernikahanDetail($id)
    {
        $value = \App\Models\DataPernikahanModel::find($id);
        return view('Admin.data_sacrament.pernikahan.detail', ['data' => $value]);
    }

    public function detialBabtis($id)
    {
         $value = \App\Models\Daftar_Babtis::find($id);
         return view('Admin.data_sacrament.sacrament_baptis.detail', ['data' => $value]); 
    }
}
