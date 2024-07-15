<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Populer extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['berita'];

    public function berita(){
        return $this->belongsTo(Berita::class);
    }
}
