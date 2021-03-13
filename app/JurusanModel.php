<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JurusanModel extends Model
{
    protected $table = 'jurusan';

    public function hasManyMahasiswa()
    {
        return $this->hasMany(MahasiswaModel::class, 'id_jurusan', 'id_jurusan');
    }

}