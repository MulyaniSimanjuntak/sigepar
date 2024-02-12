<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $value = AboutModel::find(1);
        return view('Admin.about.index',['data' => $value]);
    }
    public function update(Request $request)
    {
         $this->validate($request, [
            'nama' => 'required',
            'sejarah' => 'required',
        ]);

        $pengurus = AboutModel::find(1);
        $pengurus->update($request->all());

        if ($request->hasFile('logo')) {
            $request->file('logo')->move('fileweb/', $request->file('logo')->getClientOriginalName());
            $pengurus->logo = $request->file('logo')->getClientOriginalName();
            $pengurus->save();
        }
        return redirect('/aboutus' )->with('success', 'Data berhasil diubah');
    }
}
