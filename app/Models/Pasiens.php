<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasiens extends Model
{
    /** @use HasFactory<\Database\Factories\PasiensFactory> */
    use HasFactory;
    protected $guarded = [];
    public function daftars()
    {
        return $this->hasMany(Daftars::class);
    }
}
