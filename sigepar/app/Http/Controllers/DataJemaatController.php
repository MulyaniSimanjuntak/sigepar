<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataJemaatController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_jemaat = \App\Models\Jemaat::where('nama_lengkap', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_jemaat = \App\Models\Jemaat::all();
        }
        return view('Admin.Data_jemaat.data_jemaat', ['data_jemaat' => $data_jemaat]);
    }
    public function v_tambah()
    {
        return view('Admin.Data_jemaat.tambah_data');
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'nama_lengkap' => 'required| min:5',
            'jenis_kelamin' => 'required',
            'keluarga' => 'required',
            'no_hp' => 'nullable|numeric',
            'tanggal_lahir' => 'required',
            'tanggal_bergabung' => 'required',
            'status' => 'required',
            'avatar' => 'mimes:jpg,png',
        ]);
        $jemaat = \App\Models\Jemaat::create($request->all());
        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('fileweb/', $request->file('avatar')->getClientOriginalName());
            $jemaat->avatar = $request->file('avatar')->getClientOriginalName();
            $jemaat->save();
        }
        return redirect('/Data_Jemaat')->with('sukses', 'Data Jemaat Berhasil Ditambahkan');
    }
    public function detail($id)
    {
        $jemaat = \App\Models\Jemaat::find($id);
        $keluarga = \App\Models\Jemaat::where('keluarga', $jemaat->keluarga)->get();
        return view('Admin.Data_jemaat.detail', ['jemaat' => $jemaat], ['keluarga' => $keluarga]);
    }
    public function edit($id)
    {
        $jemaat = \App\Models\Jemaat::find($id);
        return view('Admin.Data_jemaat.edit', ['jemaat' => $jemaat]);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_lengkap' => 'required| min:5',
            'jenis_kelamin' => 'required',
            'keluarga' => 'required',
            'no_hp' => 'nullable|numeric',
            'tanggal_lahir' => 'required',
            'tanggal_bergabung' => 'required',
            'status' => 'required',
            'avatar' => 'mimes:jpg,png',
        ]);
        $jemaat = \App\Models\Jemaat::find($id);
        $jemaat->update($request->all());
        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('fileweb/', $request->file('avatar')->getClientOriginalName());
            $jemaat->avatar = $request->file('avatar')->getClientOriginalName();
            $jemaat->save();
        }
        return redirect('/Data_Jemaat')->with('sukses', 'Data Jemaat ' .  $jemaat->nama_lengkap  .  'Berhasil Diubah');
    }
    public function delete($id)
    {
        $jemaat = \App\Models\Jemaat::find($id);
        $jemaat->delete($jemaat);
        return redirect('/Data_Jemaat')->with('sukses', 'Data Jemaat ' .  $jemaat->nama_lengkap  .  'Berhasil Dihapus');
    }

    public function jemaat(Request $request)
    {
        // if ($request->has('cari')) {
        //     $data_jemaat = \App\Models\User::where('nama', 'LIKE', '%' . $request->cari . '%')->get();
        // } else {
        $data_jemaat = \App\Models\User::where('role', 'jemaat')->get();
        // var_dump($data_jemaat);
        // }
        return view('Admin.Data_jemaat.jemaat', ['data_jemaat' => $data_jemaat]);
    }

    public function jemaatDelete($id)
    {
        $jemaat = \App\Models\Jemaat::find($id);
        $jemaat->delete($jemaat);
        return redirect('/Data_Jemaat')->with('sukses', 'Data Jemaat Berhasil Dihapus');
    }
}
