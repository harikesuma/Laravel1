<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public function prodis(){
        return $this->belongsTo('App\Prodi');
    }
}
