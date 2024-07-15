<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri_det extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['galeri'];

    public function galeri(){
        return $this->belongsTo(Galeri::class);
    }
}
