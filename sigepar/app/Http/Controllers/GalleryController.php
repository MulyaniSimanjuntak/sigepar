<?php

namespace App\Http\Controllers;

use App\Models\AlbumModel;
use App\Models\GalleryModel;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
          if ($request->has('cari')) {
            $data_jemaat = AlbumModel::where('nama_album', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_jemaat = AlbumModel::all();
        }

        return view('Admin.gallery.index', ['data_jemaat' => $data_jemaat]);
    }

    public function tambahGallery()
    {
         return view('Admin.gallery.tambah');
    }

    
    public function deleteGallery($id, $idd)
    {
        $jemaat = GalleryModel::find($id);
        $jemaat->delete($jemaat);    
        return redirect('/gallery' . '/' . $idd .'/detail')->with('sukses', 'Data Gallery ' .  $jemaat->nama_album  .  'Berhasil Dihapus');
    }
    
    public function galleryCreate(Request $request, $id)
    {
        $validate = $this->validate($request, [
            'nama_album' => 'required',
        ]);

        if ($validate) {
            $resutl =  AlbumModel::create([
                'nama_album' => $request->nama_album,                           
            ]);
        }

        if ($request->hasFile('gallery_album')) {
            $request->file('gallery_album')->move('fileweb/', $request->file('gallery_album')->getClientOriginalName());
            $resutl->gallery_album = $request->file('gallery_album')->getClientOriginalName();
            $resutl->save();
        }

        return redirect('/gallery' . '/'. $id .'/detail')->with('succes', 'Data Berhasil Ditambahkan');
    }
    public function albumCreate(Request $request)
    {
        $validate = $this->validate($request, [
            'nama_album' => 'required',
        ]);

        if ($validate) {
            $resutl =  AlbumModel::create([
                'nama_album' => $request->nama_album,                           
            ]);
        }

        if ($request->hasFile('gallery_album')) {
            $request->file('gallery_album')->move('fileweb/', $request->file('gallery_album')->getClientOriginalName());
            $resutl->gallery_album = $request->file('gallery_album')->getClientOriginalName();
            $resutl->save();
        }

        return redirect('/gallery' )->with('success', 'Data Berhasil Ditambahkan');
    }

    public function galleryDetail($id)
    {
        $jemaat = GalleryModel::where('id_album', $id)->get(); 
        return view('Admin.gallery.detail', ['data_jemaat'=> $jemaat, 'id' => $id]);
      
    }

    public function albumUpdate(Request $request, $id)
    {
         $validate = $this->validate($request, [
            'nama_album' => 'required',
        ]);

        $pengurus = AlbumModel::find($id);
        $pengurus->update($request->all());
  

        if ($request->hasFile('gallery_album')) {
            $request->file('gallery_album')->move('fileweb/', $request->file('gallery_album')->getClientOriginalName());
            $pengurus->gallery_album = $request->file('gallery_album')->getClientOriginalName();
            $pengurus->save();
        }

        return redirect('/gallery')->with('success', 'Data Berhasil Diubah');
    }

    
    public function galleryImageCreate(Request $request, $id)
    {
        $this->validate($request, [
            'nama_gallery' => 'required',
            'id_album' => 'required',
        ]);

        $pengurus = GalleryModel::create($request->all());
        if ($request->hasFile('image_gallery')) {
            $request->file('image_gallery')->move('fileweb/', $request->file('image_gallery')->getClientOriginalName());
            $pengurus->image_gallery = $request->file('image_gallery')->getClientOriginalName();
            $pengurus->save();
        }
        return redirect('/gallery' . '/'. $id.'/detail')->with('sukses', 'Data Gallery berhasil ditambahkan');
    }

    public function albumEdit($id)
    {
         $jemaat = AlbumModel::find($id);
         return view('Admin.gallery.edit', ['jemaat' => $jemaat]);
    }

    public function albumDelete($id)
    {
        $jemaat = AlbumModel::find($id);
        $jemaat->delete($jemaat);    
        return redirect('/gallery')->with('success', 'Data Album Berhasil Dihapus');
    }

    
    public function galleryTambah($id)
    {
        return view('Admin.gallery.galleryTambah', ['id' => $id]);
    }

        public function galleryDelete($id, $idd)
    {
        $jemaat = GalleryModel::find($id);
        $jemaat->delete($jemaat);    
        return redirect('/gallery' . '/' . $idd .'/detail')->with('sukses', 'Data Gallery ' .  $jemaat->nama_album  .  'Berhasil Dihapus');
    }

    public function albumDetail($id)
    {
         $jemaat = GalleryModel::where('id_album', $id)->get(); 
        return view('Admin.gallery.detail', ['data_jemaat'=> $jemaat, 'id' => $id]);
    }



}
