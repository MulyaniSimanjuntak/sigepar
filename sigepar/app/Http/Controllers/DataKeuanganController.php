<?php

namespace App\Http\Controllers;

use App\Models\KeuanganModel;
use Illuminate\Http\Request;

class DataKeuanganController extends Controller
{
    public function index(Request $request)
    {
          if ($request->has('cari')) {
            $data_jemaat = KeuanganModel::where('nama', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_jemaat = KeuanganModel::all();
        }
        return view('Admin.data_keuangan.data_keuangan', ['data' => $data_jemaat]);
    }

    public function keuanganTambah(Request $request)
    {
        return view('Admin.data_keuangan.tambah');
    }

    public function keuanganCreate(Request $request)
    {
        $validate = $this->validate($request, [
            'nama' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required',         
            'keterangan' => 'required',         
        ]);

        if ($validate) {
          KeuanganModel::create([
                'nama' => $request->nama,
                'tanggal' => $request->tanggal,
                'jumlah' => $request->jumlah,
                'keterangan' => $request->keterangan,
            ]);
        }

        return redirect('/Data_Keuangan')->with('succes', 'Data Berhasil Ditambahkan');
    }

    public function keuanganDelete($id)
    {
        $jemaat = KeuanganModel::find($id);
        $jemaat->delete($jemaat);
        return redirect('/Data_Keuangan')->with('sukses', 'Data Berhasil Dihapus');
    }


    public function keuanganEdit($id)
    {
        $jemaat = KeuanganModel::find($id);
        return view('Admin.data_keuangan.edit', ['data' => $jemaat]);
    }

     public function keuanganUpdate(Request $request, $id)
    {
         $this->validate($request, [
            'nama' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required',
            'keterangan' => 'required',
        ]);

        $pengurus = KeuanganModel::find($id);
        $pengurus->update($request->all());

        return redirect('/Data_Keuangan' )->with('success', 'Data berhasil diubah');
    }
}
