<?php

namespace App\Http\Controllers;

use App\Models\ProcedureModel;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    public function index($id)
    {
        $jemaat = ProcedureModel::where('id_worship', $id)->get();
        return view('Admin.procedure.index',['data' => $jemaat, "id" => $id]);
    }

    public function procedureTambah($id)
    {
          return view('Admin.procedure.tambah', ['id' => $id]);
    }

    public function procedureCreate(Request $request , $id)
    {
         $validate = $this->validate($request, [
            'judul_procedure' => 'required',
            'isi' => 'required',
        ]);

        if ($validate) {
          ProcedureModel::create([
                'judul_procedure' => $request->judul_procedure,
                'isi' => $request->isi,
                'id_worship' => $id
            ]);
        }

        return redirect('/procedure' . '/'. $id. '/index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function procedureDelete($id, $idPro)
    {
        $jemaat = ProcedureModel::find($id);
        $jemaat->delete($jemaat);    
        return redirect('/procedure' . '/' .  $idPro .'/index')->with('success', 'Data Berhasil Dihapus');
    }

    public function procedureEdit($id, $idPro)
    {
        $jemaat = ProcedureModel::find($id)->first();
        return view('Admin.procedure.edit',['data' => $jemaat, "id" => $idPro]);
    }

    public function procedureUpdate(Request $request, $id, $idPro)
    {
       $validate = $this->validate($request, [
            'judul_procedure' => 'required',
            'isi' => 'required',
        ]);

        
        if ($validate) {
          
            $jemaat = ProcedureModel::find($id);
            $jemaat->update($request->all());
        }

      
        return redirect('/procedure' . '/' .  $idPro .'/index')->with('success', 'Data Berhasil Diubah');
    }
}
