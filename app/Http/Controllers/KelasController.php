<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KelasModel;

class KelasController extends Controller
{
    public function index(Request $request){
        $data = KelasModel::all()->where('status',1);
        $idk = KelasModel::latest()->get()->first();

        return view('mahasiswa.kelas', compact('data','idk'));
    }

    // SIMPAN DATA KELAS
    public function postkelas(Request $request, KelasModel $kelasmodel){

        $simpan = $kelasmodel->create([
            'id_kelas' => $request->id_kelas,
            'nm_kelas' => $request->nm_kelas,
            'status' => 1
        ]);

        if (!$simpan->exists) {
            return redirect()->route('kelas')->with('error', 'Data Gagal Disimpan');
        }
        return redirect()->route('kelas')->with('success', 'Data Berhasil Disimpan');

    }

    // AMBIL DATA KELAS YANG MAU DI EDIT
    public function editKls($id_kelas)
    {
        $kelas = KelasModel::where('id_kelas', $id_kelas)->first();
        toastr()->warning($id_kelas , 'Terpilih');
        return view('kelas.update', compact('kelas'));
    }

}