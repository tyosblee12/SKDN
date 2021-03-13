<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = ['nim','nm_mhs','alamat','id_kelas','id_jurusan','no_telp','email','TA','status'];

    public function haveKelas()
    {
        return $this->belongsTo(KelasModel::class, 'id_kelas', 'id_kelas');
    }
    
    public function haveJurusan()
    {
        return $this->belongsTo(JurusanModel::class, 'id_jurusan', 'id_jurusan');
    }
}