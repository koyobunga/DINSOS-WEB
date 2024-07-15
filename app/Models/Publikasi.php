<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publikasi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $load = ['dokumen_det'];

    public function publikasi_det(){
        return $this->hasMany(Publikasi_det::class);
    }
}
