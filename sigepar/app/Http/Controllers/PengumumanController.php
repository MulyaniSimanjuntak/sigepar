<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengumumanModel;

class PengumumanController extends Controller
{
    public function index(Request $request)
    {
         if ($request->has('cari')) {
            $data_jemaat = PengumumanModel::where('judul_pengumuman', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_jemaat = PengumumanModel::all();
        }

        return view('Admin.pengumuman.index', ['data_jemaat' => $data_jemaat]);
    }

    public function deletePengumuman($id)
    {
        $jemaat = PengumumanModel::find($id);
        $jemaat->delete($jemaat);    
        return redirect('/pengumuman')->with('sukses', 'Data Pengumuman ' .  $jemaat->nama_pengumuman  .  'Berhasil Dihapus');
    }

    public function tambahPengumuman()
    {
        return view('Admin.pengumuman.tambah');
    }
    
    public function pengumumanDetail($id)
    {
         $jemaat = PengumumanModel::find($id);
        return view('Admin.pengumuman.detail',['data' => $jemaat]);
 
    }

    public function pengumumanCreate(Request $request)
    {
        $validate = $this->validate($request, [
            'tanggal' => 'required',
            'judul_pengumuman' => 'required',
            'isi' => 'required',         
        ]);

        if ($validate) {
         $pengurus =  PengumumanModel::create([
                'tanggal' => $request->tanggal,
                'judul_pengumuman' => $request->judul_pengumuman,
                'isi' => $request->isi,                
            ]);
        }

         if ($request->hasFile('image')) {
            $request->file('image')->move('fileweb/', $request->file('image')->getClientOriginalName());
            $pengurus->image = $request->file('image')->getClientOriginalName();
            $pengurus->save();
        }

        return redirect('/pengumuman')->with('succes', 'Data Berhasil Ditambahkan');
    }

    public function pengumumanEdit($id)
    {
        $jemaat = PengumumanModel::find($id);
        return view('Admin.pengumuman.edit',['data' => $jemaat]);
    }


     public function updatePengumuman(Request $request, $id)
    {
        $this->validate($request, [
            'tanggal' => 'required',
            'judul_pengumuman' => 'required',
            'isi' => 'required',     
        ]);


        $pengurus = PengumumanModel::find($id);
        $pengurus->update($request->all());
        if ($request->hasFile('image')) {
            $request->file('image')->move('fileweb/', $request->file('image')->getClientOriginalName());
            $pengurus->image = $request->file('image')->getClientOriginalName();
            $pengurus->save();
        }

          return redirect('/pengumuman')->with('succes', 'Data Berhasil Diubah');
    }


}
