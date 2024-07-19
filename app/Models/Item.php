<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get all of the aset for the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function aset()
    {
        return $this->hasMany(Aset::class);
    }
}
