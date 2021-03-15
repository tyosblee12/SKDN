<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MahasiswaModel;
use App\KelasModel;
use App\JurusanModel;

class MahasiswaController extends Controller
{
    public function index(){
        $data = MahasiswaModel::all()->where('status',1);

        return view('mahasiswa.index', compact('data'));
    }

    public function tambahmhs(){
        $kelas = KelasModel::all()->where('status',1);
        $jurusan = JurusanModel::all()->where('status',1);

        return view ('mahasiswa.tambah',compact('kelas','jurusan'));
    }

    public function postmhs(Request $request, MahasiswaModel $mahasiswamodel){
        $simpan = $mahasiswamodel->create([
            'nim' => $request->nim,
            'nm_mhs' => $request->nm_mhs,
            'id_kelas' => $request->id_kelas,
            'id_jurusan' => $request->id_jurusan,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'TA' => $request->TA,
            'status' => 1
        ]);

        if (!$simpan->exists) {
            toastr()->error('Tambah Data Mahasiswa Gagal');
            return redirect()->route('mahasiswa')->with('error', 'Data Gagal Disimpan');
        }
            toastr()->success('Tambah Data Mahasiswa Berhasil');
            return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Disimpan');

    }
}