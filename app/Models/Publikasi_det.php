<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publikasi_det extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['publikasi'];

    public function publikasi(){
        return $this->belongsTo(Publikasi::class);
    }
}
