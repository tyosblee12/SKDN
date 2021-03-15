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

    // TAMBAH DATA MHS
    public function tambahmhs(){
        $kelas = KelasModel::all()->where('status',1);
        $jurusan = JurusanModel::all()->where('status',1);

        return view ('mahasiswa.tambah',compact('kelas','jurusan'));
    }

    // SIMPAN DATA MHS
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
            'status' => 1,
            'created_at' =>now()
        ]);

        if (!$simpan->exists) {
            toastr()->error('Tambah Data Mahasiswa Gagal');
            return redirect()->route('mahasiswa')->with('error', 'Data Gagal Disimpan');
        }
            toastr()->success('Tambah Data Mahasiswa Berhasil');
            return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Disimpan');

    }

    // AMBIL DATA MHS YANG MAU DI EDIT
    public function editMhs($nim)
    {
        $kelas = KelasModel::all()->where('status',1);
        $jurusan = JurusanModel::all()->where('status',1);
        $data = MahasiswaModel::where('nim', $nim)->first();
        toastr()->warning($nim , 'Terpilih');
        return view('mahasiswa.update', compact('data','kelas','jurusan'));
    }
    
    // UPDATE DATA MHS
    public function updateMhs($nim, MahasiswaModel $MahasiswaModel, Request $request)
    {
    
        $update = $MahasiswaModel->where('nim', $nim)->update([
            'nm_mhs'        => $request->nm_mhs,
            'id_kelas'      => $request->id_kelas,
            'id_jurusan'    => $request->id_jurusan,
            'no_telp'       => $request->no_telp,
            'email'         => $request->email,
            'alamat'        => $request->alamat,
            'TA'            => $request->TA,
            'status'        => $request->status,
            'updated_at'    => now(),
        ]);
        
        if (!$update) {
            toastr()->error('Ubah Data Mahasiswa Gagal');
            return redirect()->route('mahasiswa')->with('error', 'data gagal di update');
        }
            toastr()->success('Ubah Data Mahasiswa Berhasil');
            return redirect()->route('mahasiswa')->with('success', 'data berhasil di update');
    }

    // DELETE DATA MHS
    public function deleteMhs($nim, MahasiswaModel $MahasiswaModel)
    {
    
        $delete = $MahasiswaModel->where('nim', $nim)->update([
            'is_active' => '0',
        ]);
        
        if (!$delete) {
            toastr()->error('Hapus Data Mahasiswa Gagal');
            return redirect()->route('mahasiswa')->with('error', 'data gagal di dihapus');
        }
            toastr()->success('Hapus Data Mahasiswa Berhasil');
            return redirect()->route('mahasiswa')->with('success', 'data berhasil di hapus');
    }
    
}