<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function jadwal(){
        return $this->belongsTo(Jadwal::class);
    }
    public function dataPelajar(){
        return $this->hasMany(DataPelajar::class);
    }
}
