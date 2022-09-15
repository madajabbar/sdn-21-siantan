<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function dataPelajar(){
        return $this->belongsTo(DataPelajar::class);
    }
    public function jadwal(){
        return $this->belongsTo(Jadwal::class);
    }
}
