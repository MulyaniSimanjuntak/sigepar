<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Jemaat;
use App\Models\PengumumanModel;
use App\Models\GalleryModel;
use App\Models\WordshipModel;

class JemaatController extends Controller
{
    public function index()
    {

          $data = [
            'jumlah_jemaat' => Jemaat::count(),
            'jumlah_pengumuman' => PengumumanModel::count(),
            'jlh_gallery' => GalleryModel::count(),
            'jlh_worship' => WordshipModel::count(),
        ];
        return view('Jemaat.Dashboard', ['data' => $data]);
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $jemaat = \App\Models\User::find($id);
        return view('Jemaat.DashboarProfile', ['jemaat' => $jemaat]);
    }

    public function daftarBabtis(Request $request)
    {
        $id = Auth::user()->id;
        $daftarBabtis = DB::table('daftar_babtis')
            ->where('user_id', $id)
            ->first();

        if ($daftarBabtis == null) {
            return view('Jemaat.DaftarBabtis');
        }

        if ($daftarBabtis != null) {
            return view('Jemaat.DataBabtis', ['data' => $daftarBabtis]);
        }
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'nama_anak' => 'required',
        ]);

        $daftarBabtis = \App\Models\Daftar_Babtis::create($request->all());

        if ($request->hasFile('akte_nikah')) {
            $request->file('akte_nikah')->move('fileweb/', $request->file('akte_nikah')->getClientOriginalName());
            $daftarBabtis->akte_nikah = $request->file('akte_nikah')->getClientOriginalName();
            $daftarBabtis->save();
        }
        if ($request->hasFile('kk')) {
            $request->file('kk')->move('fileweb/', $request->file('kk')->getClientOriginalName());
            $daftarBabtis->kk = $request->file('kk')->getClientOriginalName();
            $daftarBabtis->save();
        }

        return redirect('/daftarBabtis')->with('sukses', 'Data Jemaat Berhasil Ditambahkan');
    }

    public function peneguhanSidi()
    {
        $value = DB::table('data_peneguhan_sidi')
            ->where('id_user', Auth::user()->id)
            ->first();

        if ($value == null) {
            return view('Jemaat.peneguhan_sidi.PeneguhanSidi');
        }
        if ($value != null) {
            return view('Jemaat.peneguhan_sidi.PeneguhanSidiEdit', ['data' => $value]);
        }
    }

    public function peneguhanSidiCreate(Request $request)
    {
        $validate = $this->validate($request, [
            'id_user' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'tgl_resmi_jemaat' => 'required',
            'nama_sidi' => 'required',
            'jk_sidi' => 'required',
            'tgl_lahir' => 'required',
            'tgl_babtis_sidi' => 'required',
        ]);

        if ($validate) {
            $resutl = \App\Models\Data_Peneguhan_Sidi::create([
                'id_user' => $request->id_user,
                'nama_ayah' => $request->nama_ayah,
                'nama_ibu' => $request->nama_ibu,
                'tgl_resmi_jemaat' => $request->tgl_resmi_jemaat,
                'nama_sidi' => $request->nama_sidi,
                'jk_sidi' => $request->jk_sidi,
                'tgl_lahir' => date($request->tgl_lahir),
                'tgl_babtis_sidi' => date($request->tgl_babtis_sidi),
            ]);
        }


        if ($request->hasFile('kk')) {
            $request->file('kk')->move('fileweb/', $request->file('kk')->getClientOriginalName());
            $resutl->kk = $request->file('kk')->getClientOriginalName();
            $resutl->save();
        }

        if ($request->hasFile('lampiran')) {
            $request->file('lampiran')->move('fileweb/', $request->file('lampiran')->getClientOriginalName());
            $resutl->lampiran = $request->file('lampiran')->getClientOriginalName();
            $resutl->save();
        }

        return redirect('/peneguhanSidi')->with('succes', 'Data Berhasil Ditambahkan');
    }

    public function pernikahan()
    {
        $value = DB::table('data_pernikahan')
            ->where('id_user', Auth::user()->id)
            ->first();

        if ($value != null) {
            return view('Jemaat.pernikahan.DataPernikahanJemaat', ['data' => $value]);
        }

        if ($value == null) {
            return view('Jemaat.pernikahan.PernikahanJemaat');
        }
    }

    public function pernikahanCreate(Request $request)
    {
        $validate = $this->validate($request, [
            'id_user' => 'required',
            'nama_pria' => 'required',
            'tgl_lahir_pria' => 'required',
            'tgl_babtis_pria' => 'required',
            'tgl_sidi_pria' => 'required',
            'nama_wanita' => 'required',
            'tgl_lahir_wanita' => 'required',
            'tgl_babtis_wanita' => 'required',
            'tgl_sidi_wanita' => 'required',
        ]);

        if ($validate) {
            $resutl = \App\Models\DataPernikahanModel::create($request->all());
        }

        if ($request->hasFile('lampiran_pria')) {
            $request->file('lampiran_pria')->move('fileweb/', $request->file('lampiran_pria')->getClientOriginalName());
            $resutl->lampiran_pria = $request->file('lampiran_pria')->getClientOriginalName();
            $resutl->save();
        }

        if ($request->hasFile('sidi_pria')) {
            $request->file('sidi_pria')->move('fileweb/', $request->file('sidi_pria')->getClientOriginalName());
            $resutl->sidi_pria = $request->file('sidi_pria')->getClientOriginalName();
            $resutl->save();
        }

        if ($request->hasFile('izin_ortu_pria')) {
            $request->file('izin_ortu_pria')->move('fileweb/', $request->file('izin_ortu_pria')->getClientOriginalName());
            $resutl->izin_ortu_pria = $request->file('izin_ortu_pria')->getClientOriginalName();
            $resutl->save();
        }

        if ($request->hasFile('surat_jemaat_pria')) {
            $request->file('surat_jemaat_pria')->move('fileweb/', $request->file('surat_jemaat_pria')->getClientOriginalName());
            $resutl->surat_jemaat_pria = $request->file('surat_jemaat_pria')->getClientOriginalName();
            $resutl->save();
        }

        if ($request->hasFile('ijazah_pria')) {
            $request->file('ijazah_pria')->move('fileweb/', $request->file('ijazah_pria')->getClientOriginalName());
            $resutl->ijazah_pria = $request->file('ijazah_pria')->getClientOriginalName();
            $resutl->save();
        }

        if ($request->hasFile('lampiran_wanita')) {
            $request->file('lampiran_wanita')->move('fileweb/', $request->file('lampiran_wanita')->getClientOriginalName());
            $resutl->lampiran_wanita = $request->file('lampiran_wanita')->getClientOriginalName();
            $resutl->save();
        }

        if ($request->hasFile('sidi_wanita')) {
            $request->file('sidi_wanita')->move('fileweb/', $request->file('sidi_wanita')->getClientOriginalName());
            $resutl->sidi_wanita = $request->file('sidi_wanita')->getClientOriginalName();
            $resutl->save();
        }

        if ($request->hasFile('izin_ortu_wanita')) {
            $request->file('izin_ortu_wanita')->move('fileweb/', $request->file('izin_ortu_wanita')->getClientOriginalName());
            $resutl->izin_ortu_wanita = $request->file('izin_ortu_wanita')->getClientOriginalName();
            $resutl->save();
        }

        if ($request->hasFile('surat_jemaat_wanita')) {
            $request->file('surat_jemaat_wanita')->move('fileweb/', $request->file('surat_jemaat_wanita')->getClientOriginalName());
            $resutl->surat_jemaat_wanita = $request->file('surat_jemaat_wanita')->getClientOriginalName();
            $resutl->save();
        }

        if ($request->hasFile('ijazah_wanita')) {
            $request->file('ijazah_wanita')->move('fileweb/', $request->file('ijazah_wanita')->getClientOriginalName());
            $resutl->ijazah_wanita = $request->file('ijazah_wanita')->getClientOriginalName();
            $resutl->save();
        }


        return redirect('/pernikahan')->with('succes', 'Data Berhasil Ditambahkan');
    }

    public function updatePernikahan(Request $request)
    {

        $validate = $this->validate($request, [
            'nama_pria' => 'required',
            'tgl_lahir_pria' => 'required',
            'tgl_babtis_pria' => 'required',
            'tgl_sidi_pria' => 'required',
            'nama_wanita' => 'required',
            'tgl_lahir_wanita' => 'required',
            'tgl_babtis_wanita' => 'required',
            'tgl_sidi_wanita' => 'required',
        ]);

        if ($validate) {
            $resutl = \App\Models\DataPernikahanModel::find($request->id);
            $resutl->update($request->all());
        }


        if ($request->hasFile('lampiran_pria')) {
            $request->file('lampiran_pria')->move('fileweb/', $request->file('lampiran_pria')->getClientOriginalName());
            $resutl->lampiran_pria = $request->file('lampiran_pria')->getClientOriginalName();
            $resutl->save();
        }

        if ($request->hasFile('sidi_pria')) {
            $request->file('sidi_pria')->move('fileweb/', $request->file('sidi_pria')->getClientOriginalName());
            $resutl->sidi_pria = $request->file('sidi_pria')->getClientOriginalName();
            $resutl->save();
        }

        if ($request->hasFile('izin_ortu_pria')) {
            $request->file('izin_ortu_pria')->move('fileweb/', $request->file('izin_ortu_pria')->getClientOriginalName());
            $resutl->izin_ortu_pria = $request->file('izin_ortu_pria')->getClientOriginalName();
            $resutl->save();
        }

        if ($request->hasFile('surat_jemaat_pria')) {
            $request->file('surat_jemaat_pria')->move('fileweb/', $request->file('surat_jemaat_pria')->getClientOriginalName());
            $resutl->surat_jemaat_pria = $request->file('surat_jemaat_pria')->getClientOriginalName();
            $resutl->save();
        }

        if ($request->hasFile('ijazah_pria')) {
            $request->file('ijazah_pria')->move('fileweb/', $request->file('ijazah_pria')->getClientOriginalName());
            $resutl->ijazah_pria = $request->file('ijazah_pria')->getClientOriginalName();
            $resutl->save();
        }

        if ($request->hasFile('lampiran_wanita')) {
            $request->file('lampiran_wanita')->move('fileweb/', $request->file('lampiran_wanita')->getClientOriginalName());
            $resutl->lampiran_wanita = $request->file('lampiran_wanita')->getClientOriginalName();
            $resutl->save();
        }

        if ($request->hasFile('sidi_wanita')) {
            $request->file('sidi_wanita')->move('fileweb/', $request->file('sidi_wanita')->getClientOriginalName());
            $resutl->sidi_wanita = $request->file('sidi_wanita')->getClientOriginalName();
            $resutl->save();
        }

        if ($request->hasFile('izin_ortu_wanita')) {
            $request->file('izin_ortu_wanita')->move('fileweb/', $request->file('izin_ortu_wanita')->getClientOriginalName());
            $resutl->izin_ortu_wanita = $request->file('izin_ortu_wanita')->getClientOriginalName();
            $resutl->save();
        }

        if ($request->hasFile('surat_jemaat_wanita')) {
            $request->file('surat_jemaat_wanita')->move('fileweb/', $request->file('surat_jemaat_wanita')->getClientOriginalName());
            $resutl->surat_jemaat_wanita = $request->file('surat_jemaat_wanita')->getClientOriginalName();
            $resutl->save();
        }

        if ($request->hasFile('ijazah_wanita')) {
            $request->file('ijazah_wanita')->move('fileweb/', $request->file('ijazah_wanita')->getClientOriginalName());
            $resutl->ijazah_wanita = $request->file('ijazah_wanita')->getClientOriginalName();
            $resutl->save();
        }  

        return redirect('/pernikahan')->with('succes', 'Data Berhasil Ditambahkan');
      }
}
