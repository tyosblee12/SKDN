<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model
{
    protected $table = 'kelas';

    protected $fillable = ['id_kelas','nm_kelas','status'];

    public function hasManyMahasiswa()
    {
        return $this->hasMany(MahasiswaModel::class, 'id_kelas', 'id_kelas');
    }
}