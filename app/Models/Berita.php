<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    const EXCERPT_LENGTH = 100;

    public function excerpt(){
        return Str::limit($this->desc, Berita::EXCERPT_LENGTH);
    }

    /**
     * Get all of the populer for the Berita
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function populer()
    {
        return $this->hasMany(Populer::class);
    }
}
