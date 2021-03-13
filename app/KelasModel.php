<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model
{
    protected $table = 'kelas';

    public function hasManyMahasiswa()
    {
        return $this->hasMany(MahasiswaModel::class, 'id_kelas', 'id_kelas');
    }
}