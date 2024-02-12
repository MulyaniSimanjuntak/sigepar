<?php

namespace App\Http\Controllers;

use App\Models\WordshipModel;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class WorshipController extends Controller
{
    public function index()
    {
         $value = WordshipModel::all();
        return view('Admin.worship.index',['data' => $value]);
    }
    
    public function worshipTambah()
    {
        return view('Admin.worship.tambah');
    }

    public function worshipCreate(Request $request)
    {
        $validate = $this->validate($request, [
            'judul' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',         
            'tema' => 'required',         
        ]);

        if ($validate) {

             WordshipModel::create([
               'judul' => $request->judul,
                'hari' => $request->hari,
                'tanggal' => $request->tanggal,         
                'tema' => $request->tema,         
                'is_active' => 0,      
            ]);
        }

        return redirect('/worshipProcedure')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function wordshipDelete($id)
    {
        $jemaat = WordshipModel::find($id);
        $jemaat->delete($jemaat);    
        return redirect('/worshipProcedure')->with('success', 'Data Berhasil Dihapus');
    }

       public function wordshipEdit($id)
       {
         $jemaat = WordshipModel::find($id);
        return view('Admin.worship.edit',['data' => $jemaat]);
       }

       public function wordshipUpdate(Request $request, $id)
       {
            $this->validate($request, [
            'judul' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',     
            'tema' => 'required',  
            'is_active' => 'required'   
        ]);
        $jemaat = WordshipModel::find($id);
        $jemaat->update($request->all());
      
          return redirect('/worshipProcedure')->with('succes', 'Data Berhasil Diubah');
       }

       public function procedureIndex($id)
       {
         $jemaat = WordshipModel::find($id);
        return view('Admin.worship.index',['data' => $jemaat]);
       }
}
