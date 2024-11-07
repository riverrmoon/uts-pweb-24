<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftars extends Model
{
    /** @use HasFactory<\Database\Factories\DaftarsFactory> */
    use HasFactory;
    protected $guarded = [];
    public function poli()
    {
        return $this->belongsTo(Polis::class, 'poli_id');
    }

    public function pasien()
    {
        return $this->belongsTo(Pasiens::class, 'pasien_id');
    }
}
