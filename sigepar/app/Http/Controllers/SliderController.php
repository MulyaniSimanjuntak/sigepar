<?php

namespace App\Http\Controllers;

use App\Models\SliderModel;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index (Request $request)
    {
         if ($request->has('cari')) {
            $data_jemaat = SliderModel::where('nama_album', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_jemaat = SliderModel::all();
        }
          return view('Admin.slider.index', ['data_jemaat' => $data_jemaat]);
    }

    public function tambahSlider()
    {
          return view('Admin.slider.tambah');
    }

      public function sliderCreate(Request $request)
    {

        $validate = $this->validate($request, [
            'nama_slider' => 'required',
        ]);

        if ($validate) {
            $resutl =  SliderModel::create([
                'nama_slider' => $request->nama_slider,                           
            ]);
        }


        if ($request->hasFile('image_slider')) {
            $request->file('image_slider')->move('fileweb/', $request->file('image_slider')->getClientOriginalName());
            $resutl->image_slider = $request->file('image_slider')->getClientOriginalName();
            $resutl->save();
        }

        return redirect('/slider' )->with('success', 'Data Berhasil Ditambahkan');
    }

    
    public function sliderDelete($id)
    {
        $jemaat = SliderModel::find($id);
        $jemaat->delete($jemaat);    
        return redirect('/slider')->with('success', 'Data Album Berhasil Dihapus');
    }

        public function sliderEdit($id)
    {
         $jemaat = SliderModel::find($id);
         return view('Admin.slider.edit', ['jemaat' => $jemaat]);
    }

      public function sliderUpdate(Request $request, $id)
    {
         $validate = $this->validate($request, [
            'nama_slider' => 'required',
        ]);

        $pengurus = SliderModel::find($id);
        $pengurus->update($request->all());
  

        if ($request->hasFile('image_slider')) {
            $request->file('image_slider')->move('fileweb/', $request->file('image_slider')->getClientOriginalName());
            $pengurus->image_slider = $request->file('image_slider')->getClientOriginalName();
            $pengurus->save();
        }

        return redirect('/slider')->with('success', 'Data Berhasil Diubah');
    }



}
